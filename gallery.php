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


    <!-- gallery section start -->
    <div class="container-fluid mt-5" id="gallery">
    <div class="container mt-4">
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