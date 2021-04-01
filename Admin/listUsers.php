<?php
if(!isset($_SESSION)) 
{
    session_start(); 
}
include_once('../connection.php');
include('includes/modals.php');
$query = "SELECT * FROM users";
                $result = mysqli_query($strcon, $query);        
                        
                         
                        if (!$result) die($strcon->error);
                        while($row_user = mysqli_fetch_assoc($result)){
                          //Identfy the ID 
                          $_SESSION['id'] = $row_user['user_id'];
echo '
<tbody>
   <tr>
   <td>' . $row_user['user_id'] . '</td>';
   echo '<td>' . $row_user['fullName'] . '</td>';
   echo '<td>' . $row_user['email'] . '</td>';
   echo '<td>' . $row_user['city'] .  '</td><td>';
   echo "<a class='btn btn-success'data-toggle='modal' data-target='#exampleModal' data-id='" . $_SESSION['id'] . "'>Edit</a> <a class='btn btn-danger' href='removeUsers.php?id=" . $_SESSION['id'] . "'>Remove</a> </tr></tbody>";
 
 
  
 }
  
 ?>
 <!-- Inicio Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="id">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>