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

                    if(isset($_REQUEST["remember"]) && $_REQUEST["remember"]==1)
                    {
                        setcookie("login","1",time()+60);// second on page time 
                    }
                     else
                     {
	                 setcookie("login","1");
                     header('location: dashboard.php');
                     }
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
    <title>Login | STAMINA</title>
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
                    <button class="btn btn-outline-secondary my-3"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</button>
                    <div id="" class="form-text">Don't have an account? <a href="register.php">Register now.</a></div>
                </form>
            </div>
        </div>
    </div>
    <!-- login section end -->

    <!-- footer section start -->
    <?php include('footer.php'); ?>
    <!-- footer section ends -->

    <!-- js cdn for bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>