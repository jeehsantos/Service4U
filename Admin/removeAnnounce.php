<?php
if(!isset($_SESSION)) 
{
    session_start(); 
}
 
include_once('../connection.php');
//The user ID is sent through url (GET) and then the filter_input is going to get the number id
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
   
    $query = "DELETE  FROM user_announce WHERE announce_id = '$id'";
   
     $result = mysqli_query($strcon,$query);
    //If any change in the table the message is going to be displayed and redirect to the admin page
   if(mysqli_affected_rows($strcon)){
    $_SESSION['msg'] = "<h1 style='color:green;'>User deleted</h1>";
    header('location: index.php');
    }else{
        $_SESSION['msg'] = "<p style='color:green;'>User was not deleted</p>";
        header('location: index.php');
    } 
 
?>