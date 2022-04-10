<?php
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

    <!-- trainers section start -->
    <div class="container-fluid my-5" id="trainers">
        <div class="container my-5">
            <h3 class="text-center upper text-decoration-underline py-5">Fitness Experts</h3>
            <div class="text-center mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos harum
                voluptatum eaque quo expedita tempore voluptatibus fuga! Voluptatibus, adipisci beatae praesentium enim
                cumque quisquam magnam, omnis ratione, sunt nulla ab.</div>
            <div class="row mt-4 pb-5">
                <div class="col">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-8">
                                <img src="images/trainer-1.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h5 class="card-title vertical-up fw-bold">Steve Smith</h5>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-8">
                                <img src="images/trainer-2.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h5 class="card-title vertical-up fw-bold">Arnold Smith</h5>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-8">
                                <img src="images/trainer-3.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h5 class="card-title vertical-up fw-bold">Angel Adams</h5>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- trainers section start -->

    <!-- banner section start -->
    <div class="conatiner-fluid" id="banner">
        <div class="image">
            <img src="images/banner.jpg" class="img-fluid text-photo" alt="...">

            <div class="centered">
                <h3 class="fw-bold">FITNESS CLASSES THIS SUMMER</h3>
                <p>PAY NOW AND <br> GET <span>35% </span>DISCOUNT</p>
                <button class="btn btn-primary">Become Member</button>
            </div>
        </div>
    </div>
    <!-- banner section start -->

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