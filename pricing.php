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
                                <h5 class="card-title mb-5">₹ '.$price.' / Month</h5>
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