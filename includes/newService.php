
 
            <!-- Modal New Service  -->
 <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">New service</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body modalBodyService">
              <div class="groupServiceInputs">
                <form action="registerAnnounce.php" method="POST"> 
              <select class="form-select selectAreas" name="area" aria-label="Default select example">
                <option selected >Area</option>
                  <?php include('Admin/includes/selectList.php'); ?>
                  
                </select>
                <select class="form-select selectAreas" name="process" aria-label="Default select example">
                  <option selected>Process area</option>
                  <?php include('Admin/includes/selectProcess.php'); ?>
                </select>
                <input type="text" name="location" class="form-control" placeholder="Location" aria-label="Username"
                  aria-describedby="addon-wrapping">

                <div class="checkBoxesArea">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="deal" value="negociate" id="negociate" checked>
                    <label class="form-check-label" for="negociate">
                      Negotiate
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="fixed" name="deal" id="fixed">
                    <label class="form-check-label" for="fixed">
                      Fixed price
                    </label>
                  </div>
                  <input type="text" class="form-control" name="price-announce" placeholder="$0.00" aria-label="Username"
                    aria-describedby="addon-wrapping">
                </div>

                <input type="text" class="form-control" name="phone" placeholder="Phone" aria-label="Username"
                  aria-describedby="addon-wrapping">
                <input type="text" class="form-control" name="title-announce" placeholder="Title" aria-label="Username"
                  aria-describedby="addon-wrapping">
                <textarea  class="form-control" name="announce-description" aria-label="With textarea"></textarea>
              </div>

              <div class="groupServicePhoto">
                <div class="imageBorders">photo</div>
                <div class="imageButtons">
                   
                  <input type="file" class="btn btn-primary buttonSearch"> 
                </div>
                <div class="imageAddButton">
                  <button type="submit" class="btn btn-primary buttonSearch">Add</button>
                </div>
              </div>
        </form>
            </div>
          </div>
        </div>
      </div> 