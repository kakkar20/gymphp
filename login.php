<?php
include('database/db_connect.php');

$username = $password = "";
$error = "";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST['username'];
    $password = $_POST['password'];

        $sql = "Select * from users where username = '$username'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if($num == 1)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                if(password_verify($password, $row['password']))
                {
                    session_start();
                    $_SESSION["loggedin"] = true;
                    $_SESSION["username"] = $username;
                    header('location: dashboard.php');
                }
                else
                {
                    $error = "<span style='color: red;'>Invalid username or password</span>";
                }
            }
        }
    else
    {
        $error = "<span style='color: red;'>Invalid username or password</span>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym project</title>
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

    <!-- login section start -->
    <div class="conatiner-fluid mt-9">
        <div class="container" id="login">
            <div class="shadow p-3 mb-5 bg-body rounded cw centered">
                <h3 class="fw-bold my-3 text-center d-color">Login</h3>
                <form action="" method="post" class="cform">
                    <div class="form-text text-center my-3"><?php echo $error; ?></div>
                    <div class="mb-3">
                      <input type="text" class="form-control" id="" name="username" placeholder="Enter Username">
                      <div id="" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                      <input type="password" class="form-control" id="" name="password" placeholder="Enter password">
                      <div id="" class="form-text"></div>
                    </div>
                    <button class="btn btn-outline-secondary my-3">Login</button>
                    <div id="" class="form-text">Don't have an account? <a href="register.php">Register now.</a></div>
                  </form>
            </div>
        </div>
    </div>
    <!-- login section end -->
   
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