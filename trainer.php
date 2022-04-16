<?php
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

    <!-- trainers section start -->
    <div class="container-fluid my-5" id="trainers">
        <div class="container my-5">
        <h3 class="text-center upper text-decoration-underline py-4 rh">Fitness Experts</h3>
            <div class="text-center mb-5 rt">Fitness is the quantitative representation of individual reproductive success.
                It is also equal to the average contribution to the gene pool of the next generation, made by the same
                individuals of the specified genotype or phenotype. Fitness can be defined either with respect to a
                genotype or to a phenotype in a given environment.</div>
            <div class="row mt-4 pb-5">
                <div class="col-md-4">
                    <div class="card mb-3 rcs">
                        <div class="row g-0">
                            <div class="col-md-8">
                                <img src="images/trainer-1.jpg" class="img-fluid rounded-start" alt="..."
                                    style="height: 369px;">
                            </div>
                            <div class="col-md-4">
                                <div class="card-body vertical-up">
                                    <h5 class="card-title fw-bold tname">Steve Smith</h5>
                                    <small class="card-text">Fitness Trainer</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3 rcs">
                        <div class="row g-0">
                            <div class="col-md-8">
                                <img src="images/trainer-2.jpg" class="img-fluid rounded-start" alt="..."
                                    style="height: 100%;">
                            </div>
                            <div class="col-md-4">
                                <div class="card-body vertical-up">
                                    <h5 class="card-title fw-bold tname">Arnold Smith</h5>
                                    <small class="card-text">Fitness Trainer</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3 rcs">
                        <div class="row g-0">
                            <div class="col-md-8">
                                <img src="images/trainer-3.jpg" class="img-fluid rounded-start" alt="..."
                                    style="height: 100%;">
                            </div>
                            <div class="col-md-4">
                                <div class="card-body vertical-up">
                                    <h5 class="card-title fw-bold tname">Angel Adams</h5>
                                    <small class="card-text">Fitness Trainer</small>
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
                <a class="btn btn-outline-light fw-bold" href="register.php">Become Member</a>
            </div>
        </div>
    </div>
    <!-- banner section start -->

    <!-- footer section start -->
    <?php include('footer.php'); ?>
    <!-- footer section ends -->

    <!-- js cdn for bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>