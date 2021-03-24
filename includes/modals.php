<?php include('./login.php');?>
<!-- Login modal -->
<div class="modal fade" id="login-panel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content popup-login">
                <div class="modal-header popup-login-text">

                    <h5 class="modal-title">Login</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <?php 
                if(!empty($errors)):
                    foreach($errors as $error):
                        echo $error;
                    endforeach;
                endif;
                ?>
                </div>

                <div class="modal-body">
                    <!-- <form action=" < ?php echo $_SERVER['PHP_SELF']; ?>" method="POST"> -->
                    <form action="./login.php" method="POST">
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
                                <a href="contact.php">Forgot Password?</a>
                            </div>
                        </div>

                        <div class="modal-footer">

                            <div class="row" id="teste">
                                <div class="col">
                                    <input type="checkbox" class="form-check-input" id="remember-login">


                                    <label class="form-check-label " for="remember-login">Remember me</label>
                                </div>

                                <div class="col">
                                    <button type="submit" class="btn btn-primary" name="btn-enter">Login</button>
                                </div>
                            </div>

                        </div>
                    </form>
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
                                <input type="password" name="password" class="form-control" id="pass-input"
                                    aria-describedby="emailHelp" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="row modal-field">
                            <div class="col">
                                <input type="password" name="repassword" class="form-control" id="confirm-pass-input"
                                    placeholder="Confirm password" required>

                            </div>

                        </div>
                        <div class="modal-footer d-flex justify-content-center">

                            <button type="submit" class="btn btn-primary btn-size">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>