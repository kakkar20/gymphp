<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Gym project</title>
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
        <div class="container-fluid cmy">
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
                        header('location: index.php');
                    }else
                    {
                        echo'<li class="nav-item">
                    <a class="nav-link active">Welcome! '.$_SESSION["username"].'</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-secondary mx-1" href="logout.php"><span><i
                            class="fa-solid fa-arrow-right-from-bracket"></i></span> logout</a>
                    </li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- nav section end -->

    <!-- sidebar section start -->
   <main>
   <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-4">Sidebar</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li>
        <a href="dashboard.php" class="nav-link link-dark my-3">
        <i class="fa-solid fa-gauge-high"></i>
        Dashboard
        </a>
      </li>
      <li>
        <a href="members.php" class="nav-link link-dark my-3">
        <i class="fa-solid fa-users"></i>
          Members
        </a>
      </li>
      <li>
        <a href="plans.php" class="nav-link link-dark my-3">
        <i class="fa-solid fa-quote-left"></i>
          Plans
        </a>
      </li>
      <li class="nav-item my-3">
        <a href="profile.php" class="nav-link active" aria-current="page">
        <i class="fa-solid fa-user"></i>
          Profile
        </a>
      </li>
      <li>
        <a href="logout.php" class="nav-link link-dark my-3">
        <i class="fa-solid fa-arrow-right-from-bracket"></i>
          logout
        </a>
      </li>
    </ul>
</div>

  <div class="b-example-divider"></div>

   </main>
    <!-- sidebar section end -->

    <!-- js cdn for bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

        <script src="js/sidebars.js"></script>

</body>

</html>