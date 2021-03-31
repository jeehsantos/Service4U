
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
    