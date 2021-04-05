<?php
/* Section to list on the table the users registered in the database*/
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
   echo "<a class='btn btn-success' onclick='showDetails(this)' data-bs-fullName='" . $row_user['fullName'] . "' data-bs-email='" . $row_user['email'] . "'  data-bs-password='" . $row_user['password'] . "'  data-toggle='modal' data-target='#userEdit'  data-id='" . $_SESSION['id'] . "'>Edit</a> <a class='btn btn-danger' href='removeUsers.php?id=" . $_SESSION['id'] . "'>Remove</a> </tr></tbody>";
 
 
  
 }
  
 ?>
 <script src="js/editUser.js"></script>
 
 