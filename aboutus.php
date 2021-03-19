<?php
 if(!isset($_SESSION)) 
 { 
     session_start(); 
 } 
include('connection.php');
include('index.php');
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
    <!---->
    <!--Bootstrap CSS CDN-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

    <!--Bootstrap javascript plugins-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="CSS/style.css">
    <title>Contact Us</title>
</head>

<!-- Nav bar -->

<body id="grad-body">
    <header>
        <nav class="navbar">
            <div class="container-fluid">
                <img class="navbar-brand" id="brand-img-nav"  src="IMG/LSSmallWhite.png" alt="logo">
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
    <!-- Content Section -->
    <section id="contact-us">

        <div class="contact-div">

            <div>
                <img class="policies-img" src="IMG/about-us-distributive-top.jpg" alt="About us">
            </div>
            <div class="container">
                <div class="row about-policies">
                    <div class="col-6">
                        <div>
                            <h2>About us</h2>
                            <p>Hi! We are <strong>Jefferson dos Santos</strong> and <strong>Jennipher Oropesa</strong>,
                                two IT students with a passion for creativity and technology.</p>
                            <p>
                                As IT student we truly believe in the idea to create a platform of service to solve
                                unemployed rate of NZ. We can help people who have a skill to share with everyone o
                                small companies who are trying to competitive whit big ones. </p>
                            <p><strong>Service4U</strong> is going to support those people who are waiting for this
                                opportunity. We want to see individuals achieve their goal!</p>

                        </div>

                        <div class="members-img">
                            <a href="https://www.linkedin.com/in/jeffersonmacedo/" target="_blank" rel="external"><img src="IMG/foto1.png" alt="Avatar1"></a>
                            <img src="IMG/foto2.png" alt="Avatar2">
                        </div>



                    </div>
                    <div class="col-6">

                        <div>
                            <h2>Policies</h2>
                            <p>We want <strong>Service4U</strong> to become a safe and reliable platform. Is our
                                commitment to your privacy. It is important to us that you trust Service4U and the stuff
                                we do with your personal details.</p>
                            <p>
                                This <i>policy</i> is regarding how we gather, utilize, reveal, and secure your personal
                                information. We build a vibrant culture on Service4U, and we treat our customers'
                                personal details extremely seriously. </p>
                        </div>
                        <div class="policy-bar">
                            <a class="policy-link" data-toggle="modal" data-target="#policy-link" href="#">Read our full
                                privacy policy.</a>
                        </div>


                    </div>
                </div>

            </div>

        </div>
        <!-- Modal policies -->
        <div class="modal fade" id="policy-link" tabindex="-1" role="dialog" aria-labelledby="Policy popup"
            aria-hidden="true">

            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header popup-header">
                        <h5 class="modal-title " id="policies-title">
                            Policies
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                            <span aria-hidden="true">
                                ×</span>
                        </button>
                    </div>
                    <div class="modal-body popup-body">
                        <h5>We gather and use your personal details to deliver our mission of making life easier for
                            Kiwis through online interactions that you will enjoy. We agree to the following ideals in
                            our approach:</h5>
                        <br>
                        <p>
                            • We will protect your privacy and handle your details with the highest of respect.
                        </p>
                        <p>
                            • We are dedicated to being open and truthful so that you have full knowledge of what your
                            information is used for (including if something goes wrong).
                        </p>
                        <p>
                            • We use personal details to give more benefit to your existence.
                        </p>
                        <p>
                            • We do not intrude upon or abuse your faith.
                        </p>
                        <p>
                            To aid address any concerns regarding this privacy policy or if you have any questions,
                            <strong>please email us.</strong></p>



                    </div>
                    <div class="container policy-btn d-flex justify-content-center">
                        <button type="button" class="btn btn-primary">Accept</button>
                    </div>

                </div>
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
                <div class="modal-body">
                    <div class="row modal-field">
                        <div class="col">
                            <input type="email" class="form-control" id="email-login" aria-describedby="emailHelp"
                                placeholder="Enter email">
                        </div>
                    </div>
                    <div class="row modal-field">
                        <div class="col">
                            <input type="password" class="form-control" id="password-input" placeholder="Password">

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
                                <button type="button" class="btn btn-primary">Login</button>
                            </div>
                        </div>

                    </div>
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
                    <div class="row modal-field">
                        <div class="col mt-0">
                            <input type="email" class="form-control" id="name-input" aria-describedby="emailHelp"
                                placeholder="Name" required>
                        </div>
                    </div>
                    <div class="row modal-field">
                        <div class="col">
                            <input type="email" class="form-control" id="email-input" aria-describedby="emailHelp"
                                placeholder="Email" required>
                        </div>
                    </div>
                    <div class="row modal-field">
                        <div class="col">
                            <input type="password" class="form-control" id="pass-input" aria-describedby="emailHelp"
                                placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row modal-field">
                        <div class="col">
                            <input type="password" class="form-control" id="confirm-pass-input"
                                placeholder="Confirm password" required>

                        </div>

                    </div>
                    <div class="modal-footer d-flex justify-content-center">

                        <button type="button" class="btn btn-primary btn-size">Register</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer section -->
    <footer class="footer-bar">

        <div class="row">
            <div class="col-6">
                <img class="brand-img-footer" src="IMG/LSSmallWhite.png" alt="logo"><span class="text-white">Service4U</span></img>
            </div>
            <div class="col-6 footer-links">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" id="navigation-link" href="#">About</a>
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

</html>