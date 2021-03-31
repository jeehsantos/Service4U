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
                        while($row_announce = mysqli_fetch_assoc($result)){
                          //Identfy the ID 
                          $_SESSION['id'] = $row_announce['user_id'];
echo '
<tbody>
   <tr>
   <td>' . $row_announce['user_id'] . '</td>';
   echo '<td>' . $row_announce['fullName'] . '</td>';
   echo '<td>' . $row_announce['email'] . '</td>';
   echo '<td>' . $row_announce['city'] .  '</td><td>';
   echo "<a class='btn btn-success' data-bs-toggle='modal'
   data-bs-target='#profileModal' href='editUsers.php?id=" .$_SESSION['id'] . "'>Edit</a> <a class='btn btn-danger' href='removeUsers.php?id=" . $_SESSION['id'] . "'>Remove</a> </tr></tbody>";

 
  
 }
 ?>
 