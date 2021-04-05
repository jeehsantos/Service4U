
<!-- Inicio Modal -->
<div class="modal fade" id="userEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
   <form action="userUpdate.php" method="POST">
     <div class="modal-header">
       <h2 class="modal-title text-center">User edit</h2>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     
     <div class="modal-body">
       
         <div class="form-group">
           
           <label for="recipient-name" class="col-form-label">Full name:</label>
           <input type="hidden" id="getId" name="user_id">
           <input type="text" class="form-control" name="fullName"  id="userFullName">
         </div>
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">Email:</label>
           <input type="text" class="form-control" name="userEmail"  id="userEmail">
         </div>
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">Password:</label>
           <input type="password" class="form-control" name="userPassword" id="userPassword">
         </div>
        
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <button type="submit" class="btn btn-success" name="updateMyProfile">Update</button>
     </div>
     </form>
   </div>
 </div>
</div>