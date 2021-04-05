<?php
if(!isset($_SESSION)) 
{
    session_start(); 
}
include_once('../connection.php');
//List all services registered in the database
$query = "SELECT * FROM user_announce";
                $result = mysqli_query($strcon, $query);        
                        
                         
                        if (!$result) die($strcon->error);
                        while($row_announce = mysqli_fetch_assoc($result)){
                          //Identfy the ID 
                          
    echo '
                 <tr>
                    <td>' . $row_announce['announce_id'] . '</td>';
    echo '                <td>' . $row_announce['announce_title'] . '</td>';
    echo '                <td>' . $row_announce['user_location'] . '</td>';
    echo '                  <td>79%</td>';
    echo "<td><a class='btn btn-danger' href='removeAnnounce.php?id=" . $row_announce['announce_id']  . "'>Remove</a> </td></tr>";
   
    
  
 }
 ?>
  