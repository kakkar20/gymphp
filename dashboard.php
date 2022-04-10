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
    <div class="container-fluid" style="margin: 0; padding: 1rem 0; overflow: hidden;">
    <div class="row">
    <div class="col-2">
    <main>
   <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 257px;">
    <ul class="nav nav-pills flex-column mb-auto my-5">
      <li class="nav-item my-3">
        <a href="dashboard.php" class="nav-link active" aria-current="page">
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
      <li>
        <a href="profile.php" class="nav-link link-dark my-3">
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
    </div>    
    <div class="col-10 mt-4">
        <h2 class="mt-5 mb-2">Gym Dashboard</h2>
        <hr>
        <div class="container-fluid my-4">
            <div class="row">
                <div class="col">
                <div class="card" style="width: 20rem; background-color: #F56954; color: #ffffff;">
                    <div class="card-body my-4">
                        <p class="card-text my-5">
                        <h4 class="text-center">No Plan</h4>
                        </p>
                    </div>
                    </div>
                </div>
                <div class="col">
                <div class="card" style="width: 20rem; background-color: #00A65A; color: #ffffff;">
                    <div class="card-body my-4">
                        <p class="card-text my-5">
                        <h4 class="text-center">No Diet</h4>
                        </p>
                    </div>
                    </div>
                </div><div class="col">
                <div class="card" style="width: 20rem; background-color: #00C0EF; color: #ffffff;">
                    <div class="card-body my-4">
                        <p class="card-text my-5">
                        <h4 class="text-center">No Instructor</h4>
                        </p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
    </div>

    <!-- sidebar section end -->


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
    <!-- footer section end -->

    <!-- js cdn for bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

        <script src="js/sidebars.js"></script>

</body>

</html>