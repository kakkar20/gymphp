<?php
include('database/db_connect.php');

if(!isset($_COOKIE["login"]))// $_COOKIE is a variable and login is a cookie name 
{
    header("location: /gymproject/"); 
}

$error = '';
$delete = false;

//deleting the record
if(isset($_GET['delete']))
{
    $sno = $_GET['delete'];
    $sql = "DELETE FROM users WHERE id = '$sno'";
    $result = mysqli_query($conn, $sql);
}

// updating the record
if($_SERVER["REQUEST_METHOD"] == 'POST')
{
    if(isset($_POST['sno_edit']))
    {
        //update the record
        $sno = $_POST['sno_edit'];
        $first_name = $_POST['first_edit'];
        $last_name = $_POST['last_edit'];
        $email = $_POST['email_edit'];
        $dob = $_POST['dob_edit'];
        $username = $_POST['username_edit'];
        $plan = $_POST['plan_edit'];

        $sql = "UPDATE users SET `first_name` = '$first_name' , `last_name` = '$last_name' , `email` = '$email' , `dob` = '$dob' , `username` = '$username' , `plan` = '$plan'  WHERE users. id = '$sno'";
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
        $error = "<span style='color: red;'>Error occur while updating the data.</span>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members | STAMINA</title>
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
                    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light fixed"
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
                            {?>
                                <li class="nav-item my-3">
                                <a href="members.php" class="nav-link active">
                                    <i class="fa-solid fa-users"></i>
                                    Members
                                </a>
                            </li>
                           <?php
                            }
                            else
                            {
                            ?>
                            <li class="nav-item my-3">
                                <a href="members.php" class="nav-link active">
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

            <div class="col-9 mt-4">
                <?php
                if($_SESSION["username"] == 'admin')
                {
                echo '<h2 class="mt-5 mb-2">Gym Members</h2>';
                }
                else
                {
                    echo '<h2 class="mt-5 mb-2">Profile</h2>';
                }
                ?><hr>

                <!-- table section start -->
                <div class="container">
                <div class="form-text my-4"><?php echo $error; ?></div>
                    <?php
                    $message = '';
                  $sql = "SELECT * FROM users";
                  $result = mysqli_query($conn, $sql);
                  
                    echo '<table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Email</th>
                                <th scope="col">Date Of Birth</th>
                                <th scope="col">Username</th>
                                <th scope="col">Plan</th>
                                <th scope="col">Options</th>
                            </tr>
                        </thead>
                        <tbody>';
                        if($result && $_SESSION["username"]== 'admin')
                        {
                          $id=1;
                          while($row = $result->fetch_assoc())
                          { if($row['first_name']=='Admin')
                            continue;
                            
                            $fieldname1 = $row["id"];
                            $fieldname2 = $row["first_name"];
                            $fieldname3 = $row["last_name"];
                            $fieldname4 = $row["email"];
                            $fieldname5 = $row["dob"];
                            $fieldname6 = $row["username"];
                            $fieldname7 = $row["plan"];
                            //echo $fieldname1;

                            echo "<tr>
                            <th scope='row'>".$id."</th>
                            <td>".$fieldname2."</td>
                            <td>".$fieldname3."</td>
                            <td>".$fieldname4."</td>
                            <td>".$fieldname5."</td>
                            <td>".$fieldname6."</td>
                            <td>".$fieldname7."</td>
                            <td><div class='d-flex'><a class='mx-1 edit' data-bs-toggle='modal' data-bs-target='#staticBackdrop'><i class='fa-solid fa-pen-to-square hov_edit' id=".$fieldname1."></i></a>
                            <a class='mx-1 delete'><i class='fa-solid fa-trash-can hov_delete'  id= d".$fieldname1."></i></a></div>
                            </td>
                        </tr>";
                        $id++;
                          }
                        }
                        else
                        {
                        //    $message = "<span style='font-weight: bold;'>You are Not Allow to view this Page</span>";
                        $id=1;
                          while($row = $result->fetch_assoc())
                          { if($row['username']== $_SESSION['username'])
                            {
                            $fieldname1 = $row["id"];
                            $fieldname2 = $row["first_name"];
                            $fieldname3 = $row["last_name"];
                            $fieldname4 = $row["email"];
                            $fieldname5 = $row["dob"];
                            $fieldname6 = $row["username"];
                            $fieldname7 = $row["plan"];
                            //echo $fieldname1;

                            echo "<tr>
                            <th scope='row'>".$id."</th>
                            <td>".$fieldname2."</td>
                            <td>".$fieldname3."</td>
                            <td>".$fieldname4."</td>
                            <td>".$fieldname5."</td>
                            <td>".$fieldname6."</td>
                            <td>".$fieldname7."</td>
                            <td><a class='mx-1 edit' data-bs-toggle='modal' data-bs-target='#staticBackdrop'><i class='fa-solid fa-pen-to-square hov_edit' id=".$fieldname1."></i></a>
                            </td>
                        </tr>";
                        $id++;
                            }
                          }
                        }
                        echo ' </tbody>
                        </table>
                        <div class="form-text my-4">'.$message.'</div>';
                    ?>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Update Member</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post">
                                    <input type="hidden" name="sno_edit" id="sno_edit">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="first_edit" name="first_edit"
                                            placeholder="Enter your First Name">
                                        <div class="form-text"></div>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="last_edit" name="last_edit"
                                            placeholder="Enter your Last Name" >
                                        <div class="form-text"></div>
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" class="form-control" id="email_edit" name="email_edit"
                                            placeholder="Enter your Email" >
                                        <div class="form-text"></div>
                                    </div>
                                    <div class="mb-3">
                                        <input type="date" class="form-control" id="dob_edit" name="dob_edit" placeholder="">
                                        <div class="form-text"></div>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="username_edit" name="username_edit"
                                            placeholder="Enter your Username">
                                        <div class="form-text"></div>
                                    </div>
                                    <?php
                                    if($_SESSION["username"] == 'admin')
                                    {
                                    echo '<div class="mb-3">
                                        <input type="text" class="form-control" id="plan_edit" name="plan_edit"
                                            placeholder="Enter your Plan">
                                        <div class="form-text"></div>
                                    </div>';
                                    }
                                    else
                                    {
                                    echo '<div class="mb-3">
                                        <input type="text" class="form-control" id="plan_edit" name="plan_edit"
                                            placeholder="Enter your Plan" disabled>
                                        <div class="form-text"></div>
                                    </div>';
                                    }
                                    ?>
                                    <button type="submit" class="btn btn-primary" name="save">Update</button>
                                </form>
                            </div>
                            <!-- <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Understood</button>
                            </div> -->
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- sidebar section end -->

        <!-- footer section start -->
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <div class="col-md-4 d-flex align-items-center">
                    <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
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
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

        <script src="js/sidebars.js"></script>

        <script>
            //For updating data into database
            edits = document.getElementsByClassName("edit");
            Array.from(edits).forEach((element)=>{
                element.addEventListener("click", (e)=>{
                    tr = e.target.parentNode.parentNode.parentNode.parentNode;
                    first = tr.getElementsByTagName("td")[0].innerText;
                    last = tr.getElementsByTagName("td")[1].innerText;
                    email = tr.getElementsByTagName("td")[2].innerText;
                    dob = tr.getElementsByTagName("td")[3].innerText;
                    username = tr.getElementsByTagName("td")[4].innerText;
                    plan = tr.getElementsByTagName("td")[5].innerText;
                    //console.log(first, last, email, dob, username);
                    first_edit.value = first;
                    last_edit.value = last;
                    email_edit.value = email;
                    dob_edit.value = dob;
                    username_edit.value = username;
                    plan_edit.value = plan;
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
                       window.location = `/gymproject/members.php?delete=${sno}`;
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