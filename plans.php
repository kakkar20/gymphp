<?php
include('database/db_connect.php');

$message = '';
if(isset($_POST['save']))
{
    $plan_name = $_POST['plan_name'];
    $price = $_POST['plan_price'];
    $feature_1 = $_POST['feature_1'];
    $feature_2 = $_POST['feature_2'];
    $feature_3 = $_POST['feature_3'];
    $feature_4 = $_POST['feature_4'];

    $plan_sql = "INSERT INTO gym_plan (`plan_name`, `price`, `feature_1`, `feature_2`, `feature_3`, `feature_4`) VALUES ('$plan_name', '$price', '$feature_1', '$feature_2', '$feature_3', '$feature_4')";
    $result = mysqli_query($conn, $plansql);

    if($result)
    {
        $message = "<span style='color: green;'>Plan Add Successfully.</span>";
    }
    else
    {
        $message = "<span style='color: red;'>Error Occur.</span>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plans | Gym project</title>
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
            <div class="col-3">
                <main>
                    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light"
                        style="width: 257px; height: 100vh; margin: 55px 0;">
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
                            <li class="nav-item my-3">
                                <a href="plans.php" class="nav-link active" aria-current="page">
                                    <i class="fa-solid fa-quote-left"></i>
                                    Plans
                                </a>
                            </li>
                            <!-- <li>
                                <a href="profile.php" class="nav-link link-dark my-3">
                                    <i class="fa-solid fa-user"></i>
                                    Profile
                                </a>
                            </li> -->
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
            <!-- sidebar section end -->

            <div class="col-9 mt-4">
                <div class="d-flex justify-content-between mt-5 mb-2">
                    <h2 class="">Gym Plans</h2>
                    <?php
                if($_SESSION['username'] == 'admin')
                {
                    echo '<button class="btn btn-primary mx-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add Plan</button>';
                }
                ?>
                </div>
                <hr>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Add Plan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action = "" method="POST">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="" name="plan_name" placeholder="Enter your plan name">
                                        <div class="form-text"></div>
                                    </div>
                                    <div class="mb-3">
                                    <input type="number" class="form-control" id="" name="plan_price" placeholder="Enter your plan price">
                                        <div class="form-text"></div>
                                    </div>
                                    <div class="mb-3">
                                    <input type="text" class="form-control" id="" name="feature_1" placeholder="Enter your plan feature 1">
                                        <div class="form-text"></div>
                                    </div>
                                    <div class="mb-3">
                                    <input type="text" class="form-control" id="" name="feature_2" placeholder="Enter your plan feature 2">
                                        <div class="form-text"></div>
                                    </div>
                                    <div class="mb-3">
                                    <input type="text" class="form-control" id="" name="feature_3" placeholder="Enter your plan feature 3">
                                        <div class="form-text"></div>
                                    </div>
                                    <div class="mb-3">
                                    <input type="text" class="form-control" id="" name="feature_4" placeholder="Enter your plan feature 4">
                                        <div class="form-text"></div>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="save">Submit</button>
                                </form>
                            </div>
                            <!-- <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Understood</button>
                            </div> -->
                        </div>
                    </div>
                </div>

                <!-- table section start -->
                <div class="container">
                <div class="form-text my-3"><?php echo $message; ?></div>
                    <?php
                  $sql = "SELECT * FROM gym_plan";
                  $result = mysqli_query($conn, $sql);
                  
                    echo '<table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Plan Name</th>
                                <th scope="col">Plan Price</th>
                                <th scope="col">Feature_1</th>
                                <th scope="col">Feature_2</th>
                                <th scope="col">Feature_3</th>
                                <th scope="col">Feature_4</th>
                            </tr>
                        </thead>
                        <tbody>';
                        if($result)
                        {
                          while($row = $result->fetch_assoc())
                          {
                            $Plan_id = $row["id"];
                            $plan_name = $row['plan_name'];
                            $price = $row['price'];
                            $feature_1 = $row['feature_1'];
                            $feature_2 = $row['feature_2'];
                            $feature_3 = $row['feature_3'];
                            $feature_4 = $row['feature_4'];

                            echo ' <tr>
                            <th scope="row">'.$Plan_id.'</th>
                            <td>'.$plan_name.'</td>
                            <td>'.$price.'</td>
                            <td>'.$feature_1.'</td>
                            <td>'.$feature_2.'</td>
                            <td>'.$feature_3.'</td>
                            <td>'.$feature_4.'</td>
                        </tr>';
                          }
                        }
                        echo ' </tbody>
                        </table>';
                    ?>
                </div>

                </dov>

            </div>


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