<?php
include('database/db_connect.php');

$username = $password = $confirm_password = "";
$error = "";
$perror = "";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['cpassword'];
    // $exists = false;

    //checking whether username and email is already in the database or not
    $existsSql = "SELECT * FROM `users` WHERE username = '$username' AND email = '$email'";
    $result = mysqli_query($conn, $existsSql);
    $numExistRow = mysqli_num_rows($result);
    if($numExistRow > 0)
    {
        $error = "Username or Email id already exists";
    }
    else
    {
    if($password == $confirm_password && !empty(trim($username)))
    {
        $hash_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO `users` (`first_name`, `last_name`, `email`, `dob`, `username`, `password`, `created_at`) VALUES ( '$fname', '$lname', '$email', '$dob', '$username', '$hash_password', CURRENT_TIMESTAMP)";
        $result = mysqli_query($conn, $sql);
        $error = "<span style='color: green;'>User register successfully.</span>";
        header('location: login.php');
    }
    else
    {
        $perror = "Confirm password should be same as password";
    }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STAMINA - Dare to be great.</title>
    <!-- bootstrap cdn link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- fontawesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!-- navbar section start  -->
    <?php include('header.php'); ?>
    <!-- navbar section ends-->

    <!-- register section start -->
    <div class="conatiner-fluid mt-9">
        <div class="container" id="register">
            <div class="shadow p-3 mb-5 bg-body rounded cw-1 centered">
                <h3 class="fw-bold my-3 text-center d-color">Register</h3>
                <form action="" method="post" class="cform">
                    <div class="form-text text-center mb-3"><?php echo $error; ?></div>
                    <div class="d-flex justify-content-between">
                    <div class="mb-3 w-h">
                      <input type="text" class="form-control" id="" name="fname" placeholder="Enter First Name" required>
                      <div id="" class="form-text"></div>
                    </div>
                    <div class="mb-3 w-h">
                      <input type="text" class="form-control" id="" name="lname" placeholder="Enter Last Name" required>
                      <div id="" class="form-text"></div>
                    </div>
                    </div>
                    <div class="mb-3">
                      <input type="email" class="form-control" id="" name="email" placeholder="Enter Email Address">
                      <div id="" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                      <input type="date" class="form-control" id="" name="dob" placeholder="Enter Age">
                      <div id="" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                      <input type="text" class="form-control" id="" name="username" placeholder="Enter Username" required minlength="5" maxlength="15">
                      <div id="" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                      <input type="password" class="form-control" id="" name="password" placeholder="Enter password" required>
                      <div id="" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                      <input type="password" class="form-control" id="" name="cpassword" placeholder="Enter Confirm Password" required>
                      <div id="" class="form-text text-center"><?php echo $perror; ?></div>
                    </div>
                    <button class="btn btn-outline-secondary my-3" name="save">Register Here</button>
                    <div id="" class="form-text">Already have an account? <a href="login.php">Login here.</a></div>
                  </form>
            </div>
        </div>
    </div>
    <!-- register section end -->

    <!-- footer section start -->
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <span class="text-muted">&copy;
                    <?php echo date("Y"); ?> Stamina<span>.</span>
                </span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-muted" href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><i class="fa-brands fa-facebook"></i></a></li>
            </ul>
        </footer>
    </div>
    <!-- footer section ends -->

    <!-- js cdn for bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>