<?php
include('database/db_connect.php');

if(!isset($_COOKIE["login"]))// $_COOKIE is a variable and login is a cookie name 
{
    header("location: /gymproject/"); 
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | STAMINA</title>
    <!-- bootstrap cdn link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sidebars.css">

    <!-- fontawesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<style>
.bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
}

@media (min-width: 768px) {
    .bd-placeholder-img-lg {
        font-size: 3.5rem;
    }
}
</style>


<body>

    <!-- nav section start -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
        <div class="container-fluid cmyb">
            <a class="navbar-brand fw-bolder" href="index.php">STAMINA<span class="color">.</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php 
                    session_start();
                    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]!=true)
                    {
                        header('location: /gymproject');
                    }else
                    {
                        echo'<li class="nav-item">
                    <a class="nav-link active">Welcome! <span class="fw-bold">'.$_SESSION["username"].'</span></a>
                    </li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- nav section end -->

    <!-- sidebar section start -->
    <div class="container-fluid" style="margin: 0; padding: 1rem 0; overflow: hidden;">
        <div class="row">
            <div class="col-3">
                <main>
                    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 257px; height: 100vh;">
                        <ul class="nav nav-pills flex-column mb-auto my-5">
                            <li class="nav-item my-3">
                                <a href="dashboard.php" class="nav-link active" aria-current="page">
                                    <i class="fa-solid fa-gauge-high"></i>
                                    Dashboard
                                </a>
                            </li>
                            <?php
                             if($_SESSION["username"]== 'admin')
                             {
                            ?>
                            <li>
                                <a href="members.php" class="nav-link link-dark my-3">
                                    <i class="fa-solid fa-users"></i>
                                    Members
                                </a>
                            </li>
                            <?php
                             }
                             else{
                            ?>
                            <li>
                                <a href="members.php" class="nav-link link-dark my-3">
                                <i class="fa-solid fa-user"></i>
                                    My Profile
                                </a>
                            </li>
                            <?php
                             }
                            ?>
                            <li>
                                <a href="plans.php" class="nav-link link-dark my-3">
                                    <i class="fa-solid fa-quote-left"></i>
                                    Plans
                                </a>
                            </li>
                            <?php
                            if($_SESSION["username"]== 'admin')
                            {
                            ?>
                            <li>
                                <a href="query.php" class="nav-link link-dark my-3">
                                <i class="fa-solid fa-clipboard-question"></i>
                                    Query
                                </a>
                            </li>
                            <?php
                            }
                            ?>
                            <li>
                                <a href="logout.php" class="nav-link link-dark my-3">
                                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                    logout
                                </a>
                            </li>
                        </ul>
                    </div>


                </main>
            </div>
            <div class="col-9 mt-4">
                <h2 class="mt-5 mb-2">Gym Dashboard</h2>
                <hr>
                <div class="container-fluid my-4">
                    <div class="row">
                        <?php
              if($_SESSION['username'] != 'admin')
              {
                $sql_user = "SELECT * FROM users";
                $result = mysqli_query($conn, $sql_user);
                if($result)
                {
                  while($row = $result->fetch_assoc())
                  {
                    if($row['username']== $_SESSION['username'])
                    {
                      $plan = $row["plan"];

                      if($plan == "Recommended")
                      {
                        echo '<div class="col">
                        <div class="card" style="width: 20rem; background-color: #F56954; color: #ffffff;">
                            <div class="card-body my-4">
                                <p class="card-text my-5">
                                <h4 class="text-center">'.$plan.'<br>Currrent Plan</h4>
                                </p>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                        <div class="card" style="width: 20rem; background-color: #00A65A; color: #ffffff;">
                            <div class="card-body my-4">
                                <p class="card-text my-5">
                                <h4 class="text-center">Full<br> Diet</h4>
                                </p>
                            </div>
                            </div>
                        </div><div class="col">
                        <div class="card" style="width: 20rem; background-color: #00C0EF; color: #ffffff;">
                            <div class="card-body my-4">
                                <p class="card-text my-5">
                                <h4 class="text-center">1<br> Instructor</h4>
                                </p>
                            </div>
                            </div>
                        </div>
                    </div>';
                      }
                      else
                      {
                        echo '<div class="col">
                        <div class="card" style="width: 20rem; background-color: #F56954; color: #ffffff;">
                            <div class="card-body my-4">
                                <p class="card-text my-5">
                                <h4 class="text-center">'.$plan.'<br>Currrent Plan</h4>
                                </p>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                        <div class="card" style="width: 20rem; background-color: #00A65A; color: #ffffff;">
                            <div class="card-body my-4">
                                <p class="card-text my-5">
                                <h4 class="text-center">No <br>Diet</h4>
                                </p>
                            </div>
                            </div>
                        </div><div class="col">
                        <div class="card" style="width: 20rem; background-color: #00C0EF; color: #ffffff;">
                            <div class="card-body my-4">
                                <p class="card-text my-5">
                                <h4 class="text-center">No <br>Instructor</h4>
                                </p>
                            </div>
                            </div>
                        </div>
                    </div>';
                      }
                    }
                  }
                }
              }
              else
              {
                $sql_user = "SELECT * FROM users";
                $result = mysqli_query($conn, $sql_user);
                $row_count = mysqli_num_rows($result);
                
                $sql_plan = "SELECT * FROM gym_plan";
                $result_plan = mysqli_query($conn, $sql_plan);
                $row_count_1 = mysqli_num_rows($result_plan);

                $sql_contact = "SELECT * FROM contact_form";
                $result_contact = mysqli_query($conn, $sql_contact);
                $row_count_2 = mysqli_num_rows($result_contact);
                if($row_count)
                {
                  $count_result = $row_count - 1 ;
                }
                
               echo '<div class="col">
                <div class="card" style="width: 20rem; background-color: #F56954; color: #ffffff;">
                    <div class="card-body my-4">
                        <p class="card-text my-5">
                        <h4 class="text-center">'.$count_result.' <br>Members</h4>
                        </p>
                    </div>
                    </div>
                </div>

               <div class="col">
                <div class="card" style="width: 20rem; background-color: #00A65A; color: #ffffff;">
                    <div class="card-body my-4">
                        <p class="card-text my-5">
                        <h4 class="text-center">'.$row_count_1.' <br>Plans</h4>
                        </p>
                    </div>
                    </div>
                </div>

                <div class="col">
                <div class="card" style="width: 20rem; background-color: #00C0EF; color: #ffffff;">
                    <div class="card-body my-4">
                        <p class="card-text my-5">
                        <h4 class="text-center">'.$row_count_2.' <br>Querys</h4>
                        </p>
                    </div>
                    </div>
                </div>
            </div>';
              }
            ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- sidebar section end -->


        <!-- footer section start -->
        <?php include('footer.php'); ?>
        <!-- footer section end -->

        <!-- js cdn for bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

        <script src="js/sidebars.js"></script>

</body>

</html>