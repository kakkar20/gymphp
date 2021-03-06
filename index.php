<?php
include('database/db_connect.php');
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

    <!-- carousel section start-->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/bg-4.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/bg-5.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/bg-6.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- carousel section ends-->

    <!-- card section start -->
    <div class="container mb-5" id="card">
        <div class="row">
            <div class="col">
                <div class="card shadow p-3 mb-5 bg-body rounded rw">
                    <i class="fa-solid fa-dumbbell mt-4 fa-icon"></i>
                    <div class="card-body my-4">
                        <h5 class="card-title text-center mb-3 text-decoration-underline">Weight Lifting</h5>
                        <p class="card-text text-center">Weight Lifting is a common type of strength training for
                            developing the strength and size of skeletal muscles. It uses the force of gravity in the
                            form of weighted bars, dumbbells or weight stacks in order to oppose the force generated by
                            muscle through concentric or eccentric contraction.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow p-3 mb-5 bg-body rounded rw">
                    <i class="fa-solid fa-person-running mt-4 fa-icon"></i>
                    <div class="card-body my-4">
                        <h5 class="card-title text-center mb-3 text-decoration-underline">Running</h5>
                        <p class="card-text text-center">Running is a method of terrestrial locomotion allowing humans
                            and other animals to move rapidly on foot. Running is a type of gait characterized by an
                            aerial phase in which all feet are above the ground (though there are exceptions).This is in
                            contrast to walking.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow p-3 mb-5 bg-body rounded rw">
                    <i class="fa-solid fa-mattress-pillow mt-4 fa-icon"></i>
                    <div class="card-body my-4">
                        <h5 class="card-title text-center mb-3 text-decoration-underline">Yoga</h5>
                        <p class="card-text text-center">Yoga is a group of physical, mental, and spiritual practices or
                            disciplines which originated in ancient India and aim to control (yoke) and still the mind,
                            recognizing a detached witness-consciousness untouched by the mind (Chitta) and mundane
                            suffering (Du???kha).</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- card section ends -->

    <!-- trainers section start -->
    <div class="container-fluid" id="trainers">
        <div class="container">
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

    <!-- pricing section start -->
    <div class="container-fluid" id="price">
        <div class="container">
            <h3 class="text-center upper text-decoration-underline py-4 rh">Pricing</h3>
            <!-- <div class="container-fluid" id="price-card"> -->
            <div class="row mt-4 pb-5">
                <?php
                        $sql = "SELECT * FROM gym_plan";
                        $result = mysqli_query($conn, $sql);

                        if($result)
                        {
                            while($row = $result->fetch_assoc())
                            {
                                $plan_name = $row['plan_name'];
                                $price = $row['price'];
                                $feature_1 = $row['feature_1'];
                                $feature_2 = $row['feature_2'];
                                $feature_3 = $row['feature_3'];
                                $feature_4 = $row['feature_4'];

                                ?>
                <div class="col-md-4">
                    <div class="card">
                        <?php
                        echo '<div class="card-header text-center fw-bold">
                             '.$plan_name.'</div>';
                              echo '<div class="card-body text-center">
                                <h5 class="card-title mb-5">??? '.$price.' / Month</h5>
                                <p class="card-text card-bg">'.$feature_1.'</p>
                                <p class="card-text card-bg">'.$feature_2.'</p>
                                <p class="card-text card-bg">'.$feature_3.'</p>
                                <p class="card-text card-bg">'.$feature_4.'</p>
                            </div>';
                            ?>
                        </div>
                    </div>
                    <?php  }
                        }
                    ?>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
                <!-- pricing section ends -->


                <!-- gallery section start -->
                <div class="container-fluid" id="gallery">
                    <div class="container">
                        <h3 class="text-center upper text-decoration-underline py-4 rh">Gallery</h3>
                        <div class="row mt-4 pb-5">
                            <div class="col-md-4">
                                <img src="images/gall-1.jpg" class="img-thumbnail" alt="..." style="height: 314px;">
                            </div>
                            <div class="col-md-4">
                                <img src="images/gall-2.jpg" class="img-thumbnail" alt="..." style="height: 314px;">
                            </div>
                            <div class="col-md-4">
                                <img src="images/gall-3.jpg" class="img-thumbnail" alt="..." style="height: 314px;">
                            </div>
                        </div>
                    </div>
                    <div class="container pb-5">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="images/bg-1.jpg" class="img-thumbnail" alt="..." style="height: 314px;">
                            </div>
                            <div class="col-md-4">
                                <img src="images/gall-5.jpg" class="img-thumbnail" alt="..." style="height: 314px;">
                            </div>
                            <div class="col-md-4">
                                <img src="images/bg-2.jpg" class="img-thumbnail" alt="..." style="height: 314px;">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- gallery section ends -->


                <!-- testimonial section start -->
                <div class="container-fluid" id="testimonial">
                    <div class="container">
                        <h3 class="text-center upper text-decoration-underline py-4 rh">Happy Client</h3>
                        <div class="text-center mb-5 rt">Quality in a service or product is not what you put into it. It is
                            what
                            the customer gets out of it</div>
                        <div class="container" id="customer">
                            <div class="row mt-4 pb-5">
                                <div class="col-md-4">
                                    <div class="card rws">
                                        <img src="images/customer_1.jpg" class="card-img-top my-2"
                                            style="width: 150px; border-radius: 50%; my-2;" alt="...">
                                        <div class="card-body">
                                            <p class="card-text text-center">???I LIKE MY TRAINER. I LIKE THE LOOK OF THE
                                                STUDIO.
                                                I LIKE THE
                                                PEOPLE WHO USE IT. I LIKE THE MIX OF THOSE PEOPLE.???
                                            </p>
                                            <p class="card-text text-center" style="float: right;">??? PAMELA, CAMBRIDGE
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card rws">
                                        <img src="images/customer_2.jpg" class="card-img-top my-2"
                                            style="width: 150px; border-radius: 50%; align-items: center;" alt="...">
                                        <div class="card-body">
                                            <p class="card-text text-center">???EASE OF PARKING. AVAILABILITY OF MACHINES
                                                I LIKE
                                                TO WORK WITH.FRIENDLINESS OF RECEPTION STAFF. EXCELLENT PTS.???
                                            </p>
                                            <p class="card-text" style="float: right;">??? STEPHANIE, CAMBRIDGE
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card rws">
                                        <img src="images/customer_3.jpg" class="card-img-top my-2"
                                            style="width: 150px; border-radius: 50%; align-items: center;" alt="...">
                                        <div class="card-body">
                                            <p class="card-text text-center">???ARNOLD WAS REALLY GREAT AS A TRAINER. VERY
                                                UPBEAT.
                                                NOT OVERCROWDED AND GOOD MACHINES.???</p>
                                            <p class="card-text" style="float: right;">??? JACKIE, CAMBRIDGE
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- testimonial section ends -->

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

                <!-- back to top button -->
                <button onclick="topFunction()" id="myBtn" title="Go to top"><i
                        class="fa-solid fa-angle-up"></i></button>


                <!-- footer section start -->
                <?php include('footer.php'); ?>
                <!-- footer section ends -->

                <!-- js cdn for bootstrap -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                    crossorigin="anonymous">
                </script>

                <script>
                $(document).ready(function() {
                    $('.nav li a').click(function(e) {

                        $('.nav li.active').removeClass('active');

                        var $parent = $(this).parent();
                        $parent.addClass('active');
                        e.preventDefault();
                    });
                });
                </script>

                <script>
                //Get the button
                var mybutton = document.getElementById("myBtn");

                // When the user scrolls down 20px from the top of the document, show the button
                window.onscroll = function() {
                    scrollFunction()
                };

                function scrollFunction() {
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        mybutton.style.display = "block";
                    } else {
                        mybutton.style.display = "none";
                    }
                }

                // When the user clicks on the button, scroll to the top of the document
                function topFunction() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                }
                </script>
</body>

</html>