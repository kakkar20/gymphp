<?php
include('database/db_connect.php');
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
                <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 22rem;">
                    <i class="fa-solid fa-dumbbell mt-4 fa-icon"></i>
                    <div class="card-body my-4">
                        <h5 class="card-title text-center mb-3 text-decoration-underline">Weight Lifting</h5>
                        <p class="card-text text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat
                            quod dolore voluptatem culpa dolorem sapiente ratione in quia, iure ipsa tenetur molestiae
                            ducimus officia laudantium dolor ipsum enim quasi tempore?</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 22rem;">
                    <i class="fa-solid fa-person-running mt-4 fa-icon"></i>
                    <div class="card-body my-4">
                        <h5 class="card-title text-center mb-3 text-decoration-underline">Running</h5>
                        <p class="card-text text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore
                            eius nulla ducimus cum illum alias sint, tempora facilis est illo hic numquam quia enim
                            temporibus, et id natus! Praesentium, neque enim quasi tempore?</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 22rem;">
                    <i class="fa-solid fa-mattress-pillow mt-4 fa-icon"></i>
                    <div class="card-body my-4">
                        <h5 class="card-title text-center mb-3 text-decoration-underline">Yoga</h5>
                        <p class="card-text text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint
                            maiores iusto dolorem unde dicta quasi quis non ut. Dignissimos quidem nobis commodi quas
                            repellat officiis ex totam officia, unde placeat enim quasi tempore?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- card section ends -->

    <!-- trainers section start -->
    <div class="container-fluid" id="trainers">
        <div class="container">
            <h3 class="text-center upper text-decoration-underline py-4">Fitness Experts</h3>
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

    <!-- pricing section start -->
    <div class="container-fluid" id="price">
        <div class="container">
            <h3 class="text-center upper text-decoration-underline py-4">Pricing</h3>
            <div class="text-center mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos harum
                voluptatum eaque quo expedita tempore voluptatibus fuga! Voluptatibus, adipisci beatae praesentium enim
                cumque quisquam magnam, omnis ratione, sunt nulla ab.</div>
            <div class="container" id="price-card">
                <div class="row mt-4 pb-5">
                    <div class="col">
                        <div class="card" style="width: 20rem;">
                            <div class="card-header text-center fw-bold">
                                Basic Plan
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title mb-5">₹1000 / Month</h5>
                                <p class="card-text card-bg">Cardio</p>
                                <p class="card-text card-bg">Weight Lifting</p>
                                <p class="card-text card-bg">No Instructor</p>
                                <p class="card-text card-bg">No diet plan</p>
                                <a href="#" class="btn btn-outline-secondary mt-4">Check It</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 20rem;">
                            <div class="card-header text-center fw-bold">
                                Recommended Plan
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title mb-5">₹1400 / Month</h5>
                                <p class="card-text card-bg">Cardio</p>
                                <p class="card-text card-bg">Weight Lifting</p>
                                <p class="card-text card-bg">Instructor</p>
                                <p class="card-text card-bg">Diet plan</p>
                                <a href="#" class="btn btn-outline-secondary mt-4">Check It</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pricing section ends -->


    <!-- gallery section start -->
    <div class="container-fluid" id="gallery">
        <div class="container">
            <h3 class="text-center upper text-decoration-underline py-4">Gallery</h3>
            <div class="text-center mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos harum
                voluptatum eaque quo expedita tempore voluptatibus fuga! Voluptatibus, adipisci beatae praesentium enim
                cumque quisquam magnam, omnis ratione, sunt nulla ab.</div>
            <div class="row mt-4 pb-5">
                <div class="col">
                    <img src="images/gall-1.jpg" class="img-thumbnail" alt="...">
                </div>
                <div class="col">
                    <img src="images/gall-2.jpg" class="img-thumbnail" alt="...">
                </div>
                <div class="col">
                    <img src="images/gall-3.jpg" class="img-thumbnail" alt="...">
                </div>
            </div>
        </div>
        <div class="container pb-5">
            <div class="row">
                <div class="col">
                    <img src="images/bg-1.jpg" class="img-thumbnail" alt="...">
                </div>
                <div class="col">
                    <img src="images/gall-5.jpg" class="img-thumbnail" alt="...">
                </div>
                <div class="col">
                    <img src="images/bg-2.jpg" class="img-thumbnail" alt="...">
                </div>
            </div>
        </div>
    </div>
    <!-- gallery section ends -->


    <!-- testimonial section start -->
    <div class="container-fluid" id="testimonial">
        <div class="container">
            <h3 class="text-center upper text-decoration-underline py-4">Happy Client</h3>
            <div class="text-center mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos harum
                voluptatum eaque quo expedita tempore voluptatibus fuga! Voluptatibus, adipisci beatae praesentium enim
                cumque quisquam magnam, omnis ratione, sunt nulla ab.</div>
            <div class="container" id="customer">
                <div class="row mt-4 pb-5">
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis esse tempora aliquid quo nostrum corrupti, mollitia rerum nemo. Autem cumque rem ullam hic in non recusandae excepturi suscipit assumenda vel.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, odit harum dolorem enim repudiandae rem rerum? Corporis placeat eveniet saepe atque, ipsum, nostrum perspiciatis earum eum alias, ipsam consectetur incidunt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis maxime tempora nulla quisquam dignissimos nesciunt, quasi atque! Recusandae hic, sapiente maiores nobis adipisci quibusdam et eum maxime, itaque natus autem.</p>
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
                <a class="btn btn-primary" href="register.php">Become Member</a>
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