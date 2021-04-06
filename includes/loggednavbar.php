<nav class="navbar navbar-expand-lg navbar-light bg-light navTop" style=" background: linear-gradient(to right, #ff722a, #ffc02a);">
      <div class="container-fluid navBarImage">
        <img src="IMG/LSFullWhite.png" alt="Logo service4u">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse headNav" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link text-light bg-primary dropdown-toggle active dropDownAccount" href="#"
                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img
                  src="IMG/user.png"
                  alt="profile-img" style="width: 30px;">
                Account
              </a>
              <ul class="dropdown-menu bg-primary" aria-labelledby="navbarDropdown">

                <li><a class="dropdown-item text-light" id="teste-drop" href="#" data-bs-toggle="modal"
                    data-bs-target="#profileModal"><img
                      src="./IMG/user-edit.png"
                      alt="profile-img" style="width: 30px; margin-right: 20px">Edit profile</a></li>

                <li><a class="dropdown-item text-light" href="#" data-bs-toggle="modal"
                    data-bs-target="#myAnnouncesModal"><img
                      src="./IMG/megaphone.png"
                      alt="profile-img" style="width: 30px; margin-right: 20px">My announces</a></li>

                <li><a class="dropdown-item text-light" href="#" data-bs-toggle="modal"
                    data-bs-target="#referencesModal"><img
                      src="IMG/plumbing.png"
                      alt="profile-img" style="width: 30px; margin-right: 20px">References</a></li>

                <li><a class="dropdown-item text-light" href="logout.php"><img
                      src="IMG/megaphone.png"
                      alt="profile-img" style="width: 30px; margin-right: 20px">Log out</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>

                <a href="./index.php" ><img src="IMG/LSFullWhite.png" alt="logo service4u" width="100px text-center">
                </a>

              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <?php 
 
 $user_id = $_SESSION['user_id'];
 

 $query = "SELECT * FROM users WHERE user_id = $user_id";
                $result = mysqli_query($strcon, $query);        
                $row_announce = mysqli_fetch_assoc($result);
               echo '
      <!-- Modal Profile -->
      <div>
        <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header modalHeader">
                <h5 class="modal-title" id="profileModalLabel">My profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body modalProfileBody">
             
               <div class="row">
                <div class="col-5"> 
               <div class="imageProfileContainer"> 
               <form action="updateProfile.php" method="POST" enctype="multipart/form-data">
                  <div class="imageProfile img-fluid"><img id="imagem2" src="IMG/user-profile.jpg" alt="Profile image"> </div>
                  <div class="mb-3">
  <label for="formFileSm" class="form-label">Upload image</label>
  <input class="form-control form-control-sm"  type="file" name="imagem" id="imagem" onchange="previewImagem()">
            </div>
</div>
                </div>
                <div class="col-7">
            
                  <div class="inputsProfileContainer">
                    <input type="text" name="fullName" class="form-control" value="'.  $row_announce['fullName'] .'" placeholder="Full name" aria-describedby="addon-wrapping">
                    
                    <input type="text" name="email" class="form-control" value="'. $row_announce['email'] .'" placeholder="Email" aria-describedby="addon-wrapping" required>

                    <div class="inputsProfileGroup">
                      <input type="text" name="address" class="form-control" value="'. $row_announce['address'] .'"  placeholder="Address" aria-describedby="addon-wrapping" required>
                      <input type="text" name="postCode" class="form-control" value="'. $row_announce['postCode'] .'" placeholder="Postcode" aria-describedby="addon-wrapping" required>
                    </div>
                    <div class="inputsProfileGroup">
                      <input type="text" name="phone" class="form-control" value="'. $row_announce['phone'] .'" placeholder="Phone" aria-describedby="addon-wrapping" required>
                      <input type="text" name="city" class="form-control" value="'. $row_announce['city'] .'" placeholder="City" aria-describedby="addon-wrapping" required>
                    </div>
                    <input type="password" name="password" class="form-control" placeholder="Password" value="'. $row_announce['password'] .'" aria-describedby="addon-wrapping">
                    <input type="password" class="form-control" placeholder="Confirm password"
                      aria-describedby="addon-wrapping">
                    <div class="buttonProfileContainer">
                      <button type="submit" name="updateMyProfile" class="btn btn-primary">Update</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      ';?>
      <!-- 2. Modal My Announces -->
      <?php include('includes/modals.php');?>
      
 
      <!-- 3. Account modal My References -->
      <?php include('includes/modals.php');?>
    </section>