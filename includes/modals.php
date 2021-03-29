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
                            <a href="contact.php">Forgot Password?</a><br>
                            <a href="contact.php" data-bs-toggle="modal" data-bs-target="#register-panel"
                            href="#">New? Join us ! </a>
                        </div>
                    </div>

                    <div class="modal-footer">

                        <div class="row" id="login-footer">
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

<!-- Modal policies -->
<div class="modal fade" id="policy-panel" tabindex="-1" role="dialog" aria-labelledby="Policy popup" aria-hidden="true">

    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header popup-header">
                <h5 class="modal-title " id="policies-title">
                    Policies
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
 
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
                <a href="index.php" class="btn btn-primary " aria-label="Close">Accept</a>
            </div>

        </div>
    </div>
</div>

<!-- 2. Modal my announces --> 
<div class="modalAnnounces">
        <div class="modal fade" id="myAnnouncesModal" tabindex="-1" aria-labelledby="myAnnouncesModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="myAnnouncesModalLabel">My announces</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body myAnnouncesBody">

                <div class="cardAnnounceContainer">
                  <div class="card mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="infoCardContainer">
                      <div class="colImage">
                        <img src="IMG/images/22.JPG" alt="Announcers">
                      </div>
                      <div class="colData">
                        <div class="cityName">Spreydon, Christchurch</div>
                        <h5 class="card-title cardTitle">Lorem ipsum.</h5>
                        <p class="cardText">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur maiores
                          eligendi, a nihil porro officiis fugiat ea ipsa. Quae, suscipit.</p>
                        <div class="cardRate">
                          <p class="card-text"><small class="text-muted">94%</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="actionsGroupIcons">
                    <img src="IMG/pencil.png" alt="edit">
                    <img src="IMG/close.png" alt="delete">
                  </div>
                </div>

                <div class="cardAnnounceContainer">
                  <div class="card mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="infoCardContainer">
                      <div class="colImage">
                        <img src="IMG/22.JPG" alt="Announcers">
                      </div>
                      <div class="colData">
                        <div class="cityName">Spreydon, Christchurch</div>
                        <h5 class="card-title cardTitle">Lorem ipsum.</h5>
                        <p class="cardText">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur maiores
                          eligendi, a nihil porro officiis fugiat ea ipsa. Quae, suscipit.</p>
                        <div class="cardRate">
                          <p class="card-text"><small class="text-muted">94%</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="actionsGroupIcons">
                    <img src="IMG/pencil.png" alt="edit">
                    <img src="IMG/close.png" alt="delete">
                  </div>
                </div>

                <div class="cardAnnounceContainer">
                  <div class="card mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="infoCardContainer">
                      <div class="colImage">
                        <img src="IMG/22.JPG" alt="Announcers">
                      </div>
                      <div class="colData">
                        <div class="cityName">Spreydon, Christchurch</div>
                        <h5 class="card-title cardTitle">Lorem ipsum.</h5>
                        <p class="cardText">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur maiores
                          eligendi, a nihil porro officiis fugiat ea ipsa. Quae, suscipit.</p>
                        <div class="cardRate">
                          <p class="card-text"><small class="text-muted">94%</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="actionsGroupIcons">
                    <img src="IMG/pencil.png" alt="edit">
                    <img src="IMG/close.png" alt="delete">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


<!-- 3. Modal account references -->
<div>
        <div class="modal fade" id="referencesModal" tabindex="-1" aria-labelledby="referencesModal" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title referencesTitle" id="referencesModalLabel">References received</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">

                <div class="myComment">
                  <div class="card mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="modalReferenceContainer">
                      <div class="referenceImage">
                        <img src="IMG/user-profile.jpg" alt="Announcers">
                      </div>
                      <div class="referenceData">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      </div>
                    </div>
                  </div>
                  <div class="likesContainer">
                    <img src="IMG/facebookLike.png" alt="like">
                    <img src="IMG/facebookDislike.png" alt="dislike">
                  </div>
                </div>

                <div class="myComment">
                  <div class="card mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="modalReferenceContainer">
                      <div class="referenceImage">
                        <img src="IMG/AS.JPG" alt="Announcers">
                      </div>
                      <div class="referenceData">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      </div>
                    </div>
                  </div>
                  <div class="likesContainer">
                    <img src="IMG/facebookLike.png" alt="like">
                    <img src="IMG/facebookDislike.png" alt="dislike">
                  </div>
                </div>

                <div class="myComment">
                  <div class="card mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="modalReferenceContainer">
                      <div class="referenceImage">
                        <img src="IMG/12.JPG" alt="Announcers">
                      </div>
                      <div class="referenceData">
                        <p>Lorem ipsum dddddolor sit amet, consectetur adipiscing elit,
                          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      </div>
                    </div>
                  </div>
                  <div class="likesContainer">
                    <img src="IMG/facebookLike.png" alt="like">
                    <img src="IMG/facebookDislike.png" alt="dislike">
                  </div>
                </div>

                <div class="myComment">
                  <div class="card mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="modalReferenceContainer">
                      <div class="referenceImage">
                        <img src="IMG/user-profile.jpg" alt="Announcers">
                      </div>
                      <div class="referenceData">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      </div>
                    </div>
                  </div>
                  <div class="likesContainer">
                    <img src="IMG/facebookLike.png" alt="like">
                    <img src="IMG/facebookDislike.png" alt="dislike">
                  </div>
                </div>


              </div>
            </div>
          </div>
        </div>
      </div>