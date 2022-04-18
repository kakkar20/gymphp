<?php
include('database/db_connect.php');

if(!isset($_COOKIE["login"]))// $_COOKIE is a variable and login is a cookie name 
{
    header("location: /gymproject/"); 
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Querys | STAMINA</title>
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
        <div class="container-fluid cmyb">
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
                        header('location: /gymproject');
                    }else
                    {
                        echo'<li class="nav-item">
                    <a class="nav-link active">Welcome! <span class="fw-bold">'.$_SESSION["username"].'</span></a>
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
                    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 257px; height: 100vh;">
                        <ul class="nav nav-pills flex-column mb-auto my-5">
                            <li>
                                <a href="dashboard.php" class="nav-link link-dark my-3">
                                    <i class="fa-solid fa-gauge-high"></i>
                                    Dashboard
                                </a>
                            </li>
                            <?php
                             if($_SESSION["username"]== 'admin')
                             {
                            ?>
                            <li>
                                <a href="members.php" class="nav-link link-dark my-3">
                                    <i class="fa-solid fa-users"></i>
                                    Members
                                </a>
                            </li>
                            <?php
                             }
                             else{
                            ?>
                            <li>
                                <a href="members.php" class="nav-link link-dark my-3">
                                    <i class="fa-solid fa-user"></i>
                                    My Profile
                                </a>
                            </li>
                            <?php
                             }
                            ?>
                            <li>
                                <a href="plans.php" class="nav-link link-dark my-3">
                                    <i class="fa-solid fa-quote-left"></i>
                                    Plans
                                </a>
                            </li>
                            <?php
                            if($_SESSION["username"]== 'admin')
                            {
                            ?>
                            <li class="nav-item my-3">
                                <a href="query.php" class="nav-link active">
                                    <i class="fa-solid fa-clipboard-question"></i>
                                    Query
                                </a>
                            </li>
                            <?php
                            }
                            ?>
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
            <div class="col-9 mt-4">
                <h2 class="mt-5 mb-2">Querys</h2>
                <hr>

                <!-- table section start -->
        <div class="container">
                    <?php
                    $message = '';
                  $sql = "SELECT * FROM contact_form";
                  $result = mysqli_query($conn, $sql);
                  
                    echo '<table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Message</th>
                                <th scope="col">Time</th>
                            </tr>
                        </thead>
                        <tbody>';
                        if($result && $_SESSION["username"]== 'admin')
                        {
                          $id=1;
                          $result_count =mysqli_num_rows($result);
                          if($result_count > 0)
                          { 
                          while($row = $result->fetch_assoc())
                          {
                            //$fieldname1 = $row["id"];
                            $fieldname2 = $row["first_name"];
                            $fieldname3 = $row["last_name"];
                            $fieldname4 = $row["email"];
                            $fieldname5 = $row["phone_number"];
                            $fieldname6 = $row["message"];
                            $fieldname7 = $row["created_at"];
                            //echo $fieldname1;

                            echo "<tr>
                            <th scope='row'>".$id."</th>
                            <td>".$fieldname2."</td>
                            <td>".$fieldname3."</td>
                            <td>".$fieldname4."</td>
                            <td>".$fieldname5."</td>
                            <td>".$fieldname6."</td>
                            <td>".$fieldname7."</td>
                        </tr>";
                        $id++;
                          }
                        }
                        else
                        {
                            $message = "<span class='fw-bold'>No Data to Display</span>";
                        }
                       }
                        echo ' </tbody>
                        </table>
                        <div class="form-text my-4">'.$message.'</div>';
                    ?>
                </div>

            </div>
        </div>

        <!-- sidebar section end -->


        <!-- footer section start -->
        <?php include('footer.php'); ?>
        <!-- footer section end -->

        <!-- js cdn for bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

        <script src="js/sidebars.js"></script>

</body>

</html>