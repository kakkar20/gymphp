<?php
include('database/db_connect.php');

if(!isset($_COOKIE["login"]))// $_COOKIE is a variable and login is a cookie name 
{
    header("location: /gymproject/"); 
}

$message = '';
$error = '';
$delete = false;
// inserting into database
if(isset($_POST['save']))
{
    $plan_name = $_POST['plan_name'];
    $price = $_POST['plan_price'];
    $feature_1 = $_POST['feature_1'];
    $feature_2 = $_POST['feature_2'];
    $feature_3 = $_POST['feature_3'];
    $feature_4 = $_POST['feature_4'];
    $plan_detail = $_POST['plan_detail'];

    $plan_sql = "INSERT INTO gym_plan (`plan_name`, `price`, `feature_1`, `feature_2`, `feature_3`, `feature_4`, `plan_detail`) VALUES ('$plan_name', '$price', '$feature_1', '$feature_2', '$feature_3', '$feature_4', '$plan_detail')";
    $result = mysqli_query($conn, $plan_sql);

    if($result)
    {
        $message = "<span style='color: green;'>Plan Add Successfully.</span>";
    }
    else
    {
        $message = "<span style='color: red;'>Error Occur.</span>";
    }
}

//deleting the record from database

if(isset($_GET['delete']))
{
    $sno = $_GET['delete'];
    $sql_delete = "DELETE FROM gym_plan WHERE id = '$sno'";
    $result_delete = mysqli_query($conn, $sql_delete);

    if($result_delete)
    {
        $message = "<span style='color: green;'>Record Delete Successfully</span>";
    }
    else
    {
        $message = "<span style='color: red;'>Error occur while  deleting the record</span>";
    }
}
// else
// {
//     $error = "<span style='color: red;'>Error occur!</span>";
// }

// updating the record
if(isset($_POST['submit']))
{
    if(isset($_POST['sno_edit']))
    {
        //update the record
        $sno = $_POST['sno_edit'];
        $plan_name = $_POST['plan_name_edit'];
        $price = $_POST['plan_price_edit'];
        $feature_1 = $_POST['feature_1_edit'];
        $feature_2 = $_POST['feature_2_edit'];
        $feature_3 = $_POST['feature_3_edit'];
        $feature_4 = $_POST['feature_4_edit'];
        $plan_detail = $_POST['plan_detail_edit'];

        $sql = "UPDATE gym_plan SET `plan_name` = '$plan_name' , `price` = '$price' , `feature_1` = '$feature_1' , `feature_2` = '$feature_2' , `feature_3` = '$feature_3' , `feature_4` = '$feature_4', `plan_detail` = '$plan_detail'  WHERE gym_plan. id = '$sno'";
        $result = mysqli_query($conn, $sql);

        if($result)
        {
            $error = "<span style='color: green;'>Update successfully.</span>";
        }
        else
        {
            $error = "<span style='color: red;'>Error occur while updating the data.</span>";
        }

    }
    else
    {
        $error = "<span style='color: red;'>Error occur while fetching the data.</span>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plans | STAMINA</title>
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

.hov_edit, .hov_delete
{
    color: #333;
}

.hov_edit:hover
{
    color: green;
    cursor: pointer;
}

.hov_delete:hover
{
    color: red;
    cursor: pointer;
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
                        header('location: index.php');
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
                    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light"
                        style="width: 257px; height: 100vh; margin: 55px 0;">
                        <ul class="nav nav-pills flex-column mb-auto">
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
                            <li class="nav-item my-3">
                                <a href="plans.php" class="nav-link active" aria-current="page">
                                    <i class="fa-solid fa-quote-left"></i>
                                    Plans
                                </a>
                            </li>
                            <?php
                            if($_SESSION["username"]== 'admin')
                            {
                            ?>
                            <li>
                                <a href="query.php" class="nav-link link-dark my-3">
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
            <!-- sidebar section end -->

            <div class="col-9 mt-4">
                <div class="d-flex justify-content-between mt-5 mb-2">
                    <h2 class="">Gym Plans</h2>
                    <?php
                if($_SESSION['username'] == 'admin')
                {
                    echo '<button class="btn btn-primary mx-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><span><i class="fa-solid fa-plus"></i></span> Add Plan</button>';
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
                                    <div class="mb-3">
                                    <input type="text" class="form-control" id="" name="plan_detail" placeholder="Enter your plan details">
                                        <div class="form-text"></div>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="save">Add Plan</button>
                                </form>
                            </div>
                            <!-- <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Understood</button>
                            </div> -->
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop_2" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Update Plan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action = "" method="POST">
                                <input type="hidden" name="sno_edit" id="sno_edit">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="plan_name_edit" name="plan_name_edit" placeholder="Enter your plan name">
                                        <div class="form-text"></div>
                                    </div>
                                    <div class="mb-3">
                                    <input type="number" class="form-control" id="plan_price_edit" name="plan_price_edit" placeholder="Enter your plan price">
                                        <div class="form-text"></div>
                                    </div>
                                    <div class="mb-3">
                                    <input type="text" class="form-control" id="feature_1_edit" name="feature_1_edit" placeholder="Enter your plan feature 1">
                                        <div class="form-text"></div>
                                    </div>
                                    <div class="mb-3">
                                    <input type="text" class="form-control" id="feature_2_edit" name="feature_2_edit" placeholder="Enter your plan feature 2">
                                        <div class="form-text"></div>
                                    </div>
                                    <div class="mb-3">
                                    <input type="text" class="form-control" id="feature_3_edit" name="feature_3_edit" placeholder="Enter your plan feature 3">
                                        <div class="form-text"></div>
                                    </div>
                                    <div class="mb-3">
                                    <input type="text" class="form-control" id="feature_4_edit" name="feature_4_edit" placeholder="Enter your plan feature 4">
                                        <div class="form-text"></div>
                                    </div>
                                    <div class="mb-3">
                                    <input type="text" class="form-control" id="plan_detail_edit" name="plan_detail_edit" placeholder="Enter your plan details">
                                        <div class="form-text"></div>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="submit">update Plan</button>
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
                <div class="form-text my-3"><?php echo $error; ?></div>
                    <?php
                  $sql = "SELECT * FROM gym_plan";
                  $result = mysqli_query($conn, $sql);
                  if($result && $_SESSION["username"]== 'admin')
                  {
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
                                <th scope="col">Plan Detail</th>
                                <th scope="col">options</th>
                            </tr>
                        </thead>
                        <tbody>';
                        if($result)
                        {
                            $id = 1;
                          while($row = $result->fetch_assoc())
                          {
                            $Plan_id = $row["id"];
                            $plan_name = $row['plan_name'];
                            $price = $row['price'];
                            $feature_1 = $row['feature_1'];
                            $feature_2 = $row['feature_2'];
                            $feature_3 = $row['feature_3'];
                            $feature_4 = $row['feature_4'];
                            $plan_detail = $row['plan_detail'];

                            echo "<tr>
                            <th scope='row'>".$id."</th>
                            <td>".$plan_name."</td>
                            <td>".$price."</td>
                            <td>".$feature_1."</td>
                            <td>".$feature_2."</td>
                            <td>".$feature_3."</td>
                            <td>".$feature_4."</td>
                            <td>".$plan_detail."</td>
                            <td><div class='d-flex'><a class='mx-1 edit' data-bs-toggle='modal' data-bs-target='#staticBackdrop_2'><i class='fa-solid fa-pen-to-square hov_edit' id=".$Plan_id."></i></a>
                            <a class='mx-1 delete'><i class='fa-solid fa-trash-can hov_delete'  id= d".$Plan_id."></i></a></div>
                            </td>
                        </tr>";
                        $id++;
                          }
                        }
                        echo ' </tbody>
                        </table>';
                    }
                    else
                    {
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
                                <th scope="col">Plan Detail</th>
                            </tr>
                        </thead>
                        <tbody>';
                        if($result)
                        {
                            $id = 1;
                          while($row = $result->fetch_assoc())
                          {
                            // $Plan_id = $row["id"];
                            $plan_name = $row['plan_name'];
                            $price = $row['price'];
                            $feature_1 = $row['feature_1'];
                            $feature_2 = $row['feature_2'];
                            $feature_3 = $row['feature_3'];
                            $feature_4 = $row['feature_4'];
                            $plan_detail = $row['plan_detail'];

                            echo ' <tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.$plan_name.'</td>
                            <td>'.$price.'</td>
                            <td>'.$feature_1.'</td>
                            <td>'.$feature_2.'</td>
                            <td>'.$feature_3.'</td>
                            <td>'.$feature_4.'</td>
                            <td>'.$plan_detail.'</td>
                        </tr>';
                        $id++;
                          }
                        }
                        echo ' </tbody>
                        </table>';
                    }
                    ?>
                </div>

                </div>

            </div>


            <!-- footer section start -->
            <?php include('footer.php'); ?>
            <!-- footer section end -->
            <!-- js cdn for bootstrap -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                crossorigin="anonymous"></script>

            <script src="js/sidebars.js"></script>

            <script>
            //For updating data into database
            edits = document.getElementsByClassName("edit");
            Array.from(edits).forEach((element)=>{
                element.addEventListener("click", (e)=>{
                    tr = e.target.parentNode.parentNode.parentNode.parentNode;
                    name = tr.getElementsByTagName("td")[0].innerText;
                    price = tr.getElementsByTagName("td")[1].innerText;
                    f_1 = tr.getElementsByTagName("td")[2].innerText;
                    f_2 = tr.getElementsByTagName("td")[3].innerText;
                    f_3 = tr.getElementsByTagName("td")[4].innerText;
                    f_4 = tr.getElementsByTagName("td")[5].innerText;
                    detail = tr.getElementsByTagName("td")[6].innerText;
                    //console.log(first, last, email, dob, username);
                    plan_name_edit.value = name;
                    plan_price_edit.value = price;
                    feature_1_edit.value = f_1;
                    feature_2_edit.value = f_2;
                    feature_3_edit.value = f_3;
                    feature_4_edit.value = f_4;
                    plan_detail_edit.value = detail;
                    sno_edit.value = e.target.id;
                   // console.log(e.target.id);
                })
            })

            //For deleting the data from the database
            deletes = document.getElementsByClassName("delete");
            Array.from(deletes).forEach((element)=>{
                element.addEventListener("click", (e)=>{
                   sno = e.target.id.substr(1,);
                   //console.log(e.target); 

                   if(confirm("Are you sure want to delete the record"))
                   {
                       $delete =true;
                       window.location = `/gymproject/plans.php?delete=${sno}`;
                   }
                   else
                   {
                       $delete = false;
                       console.log("no");
                   }
                })
            })
        </script>

</body>

</html>