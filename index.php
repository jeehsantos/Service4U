<?php
 if(!isset($_SESSION)) 
 { 
     session_start(); 
 } 
include('connection.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js"></script>
    <link rel="stylesheet" href="CSS/style.css">
    <title>Service4U</title>
</head>

<!-- Nav bar -->

<body id="grad-body">
    <header>
        <nav class="navbar" id="navigation-bar">
            <div class="container-fluid">
                <img class="navbar-brand" id="brand-img-nav" src="IMG/LSSmallWhite.png" alt="logo">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" id="navigation-link" href="index.html">Home</a>
                    </li>
                    <li>
                        <a class="nav-link" id="navigation-link" data-bs-toggle="modal" data-bs-target="#login-panel"
                            href="#">Login</a>
                    </li>
                    <li>
                        <a class="nav-link" id="navigation-link" data-bs-toggle="modal" data-bs-target="#register-panel"
                            href="#">Register</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- First section having the input field to search the services-->
    <section id="search-sec">
        <div class="container">
            <div class="row">
                <div class="row">
                    <img id="landing-img" src="IMG/LSFullWhite.png" alt="logo">
                </div>
                <div id="search-field">
                    <div class="row">
                        <label class="d-flex justify-content-center" for="service">
                            <h4>Hi, which service are you looking for ?</h4>
                        </label>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 d-flex justify-content-center">
                            <input class="text-service" id="text-service" size="45" type="text">
                            <input class="btn btn-primary " type="button" value="Search">
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Second section having the carousel with services-->
    <section class="sec2">
        <div class="services-img">


            <div id="align-cards">
                <div class="carousel container" style="height: 300px;"
                    data-slick='{"slidesToShow": 3, "slidesToScroll": 3}'>

                    <div class="card text-center card-services" style="margin-top: 20px;">
                        <div class="card-body">
                            <img class="img-center-card"
                                src="https://www.flaticon.com/svg/vstatic/svg/2917/2917740.svg?token=exp=1615878497~hmac=71417b6479c24e2184e56b2dbc6f2146"
                                alt="Gardening icon">
                            <h3 class="card-title">Gardening</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a class="" href="#">Read more...</a>
                        </div>
                    </div>

                    <div class="card text-center card-services" style="background-color: blue; color: white;">
                        <div class="card-body">
                            <img class="img-center-card"
                                src="https://www.flaticon.com/svg/vstatic/svg/3118/3118409.svg?token=exp=1615878665~hmac=c9a8f6649d667327f258c1ec6f33d2d3"
                                alt="Electrician icon">
                            <h3 class="card-title">Electrician</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a class="text-white" href="#">Read more...</a>
                        </div>
                    </div>
                    <div class="card text-center card-services " style="margin-top: 20px;">
                        <div class="card-body">
                            <img class="img-center-card"
                                src="https://www.flaticon.com/svg/vstatic/svg/2373/2373373.svg?token=exp=1615878769~hmac=ed04eb7ec9d18bb6bfb930e4af82481d"
                                alt="Plumbing icon">
                            <h3 class="card-title">Plumbing</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">Read more...</a>
                        </div>
                    </div>
                    <div class="card text-center card-services " style="margin-top: 20px;">
                        <div class="card-body">
                            <img class="img-center-card"
                                src="https://www.flaticon.com/svg/vstatic/svg/538/538899.svg?token=exp=1615885834~hmac=c04677cba3678e9821e29528d981e7f6"
                                alt="Tutors icon">
                            <h3 class="card-title">Tutors</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">Read more...</a>
                        </div>
                    </div>

                    <div class="card text-center card-services" style="background-color: blue; color: white;">
                        <div class="card-body">
                            <img class="img-center-card"
                                src="https://www.flaticon.com/svg/vstatic/svg/2767/2767643.svg?token=exp=1615886124~hmac=7d80700fd5cf30a6048840b3261441e5"
                                alt="Construction icon">
                            <h3 class="card-title">Construction</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a class="text-white" href="#">Read more...</a>
                        </div>
                    </div>
                    <div class="card text-center card-services " style="margin-top: 20px;">
                        <div class="card-body">
                            <img class="img-center-card"
                                src="https://www.flaticon.com/svg/vstatic/svg/2593/2593066.svg?token=exp=1615885799~hmac=43867facc1947a4571f4a876e33b2731"
                                alt="Mechanic icon">
                            <h3 class="card-title">Mechanic</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">Read more...</a>
                        </div>
                    </div>

                </div>

            </div>
            <img class="img-fluid" src='./IMG/servicios-para-empresas.jpg' alt="teste">

        </div>
        </div>

    </section>

    <!-- Login modal -->
    <div class="modal fade" id="login-panel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content popup-login">
                <div class="modal-header popup-login-text">

                    <h5 class="modal-title">Login</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   
                </div>
                <?php 
                if(isset($_SESSION['nao_autenticado'])):
                ?>
                
                <span style="margin-left:40%;">Usuario nao autenticado</span>
                
                <?php
                endif;
                unset($_SESSION['nao_autenticado']);
                ?>
                
                <div class="modal-body">
                    <form action="login.php" method="POST">
                    <div class="row modal-field">
                        <div class="col">
                            <input type="email" name="email" class="form-control" id="email-login"
                                aria-describedby="emailHelp" placeholder="Enter email" required>
                        </div>
                    </div>
                    <div class="row modal-field">
                        <div class="col">
                            <input type="password" name="password" class="form-control" id="password-input"
                                placeholder="Password" required>

                        </div>
                        <div id="forgot-password">
                            <a href="#">Forgot Password?</a>
                        </div>
                    </div>
                    
                    <div class="modal-footer">

                        <div class="row" id="teste">
                            <div class="col">
                                <input type="checkbox" class="form-check-input" id="remember-login">


                                <label class="form-check-label " for="remember-login">Remember me</label>
                            </div>

                            <div class="col">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Registration modal -->
    <div class="modal fade" id="register-panel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="./IMG/user-profile-sm.jpg" alt="profile-user">
                    <h5 class="modal-title" id="register-panel">Register</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!--Form to register a user-->
                    <form action="registration.php" method="POST">
                        <div class="row modal-field">
                            <div class="col mt-0">
                                <input type="text" name="name" class="form-control" id="name-input"
                                    aria-describedby="FullName" placeholder="Full name" required>
                            </div>
                        </div>
                        <div class="row modal-field">
                            <div class="col">
                                <input type="email" name="email" class="form-control" id="email-input"
                                    aria-describedby="emailHelp" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="row modal-field">
                            <div class="col">
                                <input type="password" name="password" class="form-control" id="pass-input" aria-describedby="emailHelp"
                                    placeholder="Password" required>
                            </div>
                        </div>
                        <div class="row modal-field">
                            <div class="col">
                                <input type="password" name="repassword" class="form-control" id="confirm-pass-input"
                                    placeholder="Confirm password" required>

                            </div>

                        </div>
                        <div class="modal-footer d-flex justify-content-center">

                            <button type="submit"  class="btn btn-primary btn-size">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer section -->
    <footer class="footer-bar">

        <div class="row">
            <div class="col-6">
                <img class="brand-img-footer" src="IMG/LSSmallWhite.png" alt="logo"><span
                    class="text-white">Service4U</span></img>
            </div>
            <div class="col-6 footer-links">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" id="navigation-link" href="aboutus.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="navigation-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="navigation-link" href="#">Policies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="navigation-link" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>

    </footer>

</body>
<script src="JS/landingpage.js"></script>

</html>