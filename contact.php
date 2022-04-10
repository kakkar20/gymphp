<?php

include('database/db_connect.php');

$error = '';
$success = '';
$message_send = false;

if(isset($_POST['submit']) && $_POST['email'] != '')
{
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pnumber = $_POST['pnumber'];
        $message = $_POST['message'];

        // saving data into database
        $sql = "INSERT INTO contact_form (`first_name`, `last_name`, `email`, `phone_number`, `message`) VALUES ('$fname', '$lname','$email','$pnumber','$message')";
        $result = mysqli_query($conn, $sql);
        
        if($result)
        {
            $success ="<span style='color:green'>Thanks for contacting us! we will connect to you shortly.</span>";
        }

        $to = "sloutionpc622@gmail.com";
        $subject = "Contact form";
        $body = "";

        $body.="From: ".$fname."\r\n";
        $body.="Email: ".$email."\r\n";
        $body.="Phone number: ".$pnumber."\r\n";
        $body.="Message: ".$message."\r\n";
        $message_send = true;

        //sending data to the email 
        // $this_mail = mail($to,$subject,$body);

        // if(!$this_mail)
        // {
        //     echo error_get_last()['message'];
        // }
    }

    else
    {
        $message_send = false;
        $error = "Enter Email is not valid";
    }
}
else
{
    $error = "Email cannot be empty";
}



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

    <!-- contact section start -->
    <div class="container-fluid" id="contact">
        <div class="conatiner py-5">
            <h3 class="text-center upper text-decoration-underline py-5 ">Contact Us</h3>
            <div class="container py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="fw-bold">Contact Information</h4>
                        <div class="container">
                            <div class="d-flex my-4 justify-content-between">
                                <div class="cicon">
                                    <i class="fa-solid fa-location-pin"></i>
                                </div>
                                <div class="cinfo">
                                    Sadar Bazar,Agra,282001
                                </div>
                            </div>
                            <div class="d-flex my-4 justify-content-between">
                                <div class="cicon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="cinfo">
                                    (+91) 9412156031
                                </div>
                            </div>
                            <div class="d-flex my-4 justify-content-between">
                                <div class="cicon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="cinfo">
                                    contact@satimna.com
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <h4 class="fw-bold pb-2">Get In Touch</h4>
                        <div class="shadow p-3 mb-5 bg-body rounded">
                        <div id="" class="form-text text-center mb-3"><?php  echo $success; ?></div>
                            <form action="" method="post">
                              <div class="d-flex justify-content-between">
                                <div class="mb-3 w-h">
                                    <input type="text" class="form-control" id="" name="fname"
                                        placeholder="Enter your first name">
                                    <div id="" class="form-text"></div>
                                </div>
                                <div class="mb-3 w-h">
                                    <input type="text" class="form-control" id="" name="lname"
                                        placeholder="Enter your last name">
                                    <div id="" class="form-text"></div>
                                </div>
                              </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="" name="email"
                                        placeholder="Enter your Email Address">
                                    <div id="" class="form-text"></div>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="" name="pnumber"
                                        placeholder="Enter your Phone Number">
                                    <div id="" class="form-text"></div>
                                </div>
                                <div class="mb-3">
                                    <textarea name="message" id="" name="message" cols="30" rows="10"
                                       placeholder="Enter your Query"></textarea>
                                    <div id="" class="form-text"></div>
                                </div>
                                <button type="submit" name="submit" class="btn btn-outline-secondary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact section start -->

    <!-- banner section start -->
    <div class="conatiner-fluid" id="banner">
        <div class="image">
            <img src="images/banner.jpg" class="img-fluid text-photo" alt="...">

            <div class="centered">
                <h3 class="fw-bold">FITNESS CLASSES THIS SUMMER</h3>
                <p>PAY NOW AND <br> GET <span>35% </span>DISCOUNT</p>
                <button class="btn btn-primary">Become Member</button>
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