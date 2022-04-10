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
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="trainer.php">Trainers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pricing.php">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <?php 
                    session_start();
                    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]!=true)
                    {
                        echo '<li class="nav-item">
                        <a class="nav-link btn btn-outline-secondary mx-1" href="register.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-secondary mx-1" href="login.php">Login</a>
                    </li>';
                    }else
                    {
                        echo'<li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Welcome! '.$_SESSION["username"].'
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="myaccount.php">My Account</a></li>
                    </ul>
                  </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-secondary mx-1" href="logout.php">logout</a>
                    </li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>