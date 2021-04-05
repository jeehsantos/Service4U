<?php include('index.php');
    include('login.php');?>

 
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
     
                 
                    <form action="login.php" method="POST">
                        <div class="row modal-field">
                            <div class="col">
                                
                <p>teste</p>
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

     <script>
     $(document).ready(function() {
    $('#login-panel').modal('show');
})
 </script>