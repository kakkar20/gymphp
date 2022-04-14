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
       <!-- pricing section start -->
       <div class="container-fluid" id="price">
        <div class="container mt-5">
            <h3 class="text-center upper text-decoration-underline py-4 mt-3">Pricing</h3>
            <!-- <div class="text-center mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos harum
                voluptatum eaque quo expedita tempore voluptatibus fuga! Voluptatibus, adipisci beatae praesentium enim
                cumque quisquam magnam, omnis ratione, sunt nulla ab.</div> -->
            <div class="container" id="price-card">
                <div class="row mt-4 pb-5">
                    <div class="col">
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

                                echo '<div class="card" style="width: 20rem;">
                            <div class="card-header text-center fw-bold">
                                '.$plan_name.'
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title mb-5">₹'.$price.' / Month</h5>
                                <p class="card-text card-bg">'.$feature_1.'</p>
                                <p class="card-text card-bg">'.$feature_2.'</p>
                                <p class="card-text card-bg">'.$feature_3.'</p>
                                <p class="card-text card-bg">'.$feature_4.'</p>
                            </div>
                        </div>
                    </div>';
                            }
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- pricing section ends -->


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