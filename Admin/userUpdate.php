<?php
if(!isset($_SESSION)) 
{
    session_start(); 
}
include_once('../connection.php');
 //Check if the button to update was selected 
if(isset($_POST['updateMyProfile'])){
   
   //if the user has ID, gets the ID to update the register
        if ( $_POST['user_id'] != '') {
             $user_id = $_POST['user_id'];
            $fullName = $_POST['fullName'];
            $email = $_POST['userEmail'];
            $password =  $_POST['userPassword'];
            $query = "UPDATE `users` SET `fullName`='$fullName',`email`='$email',`password`= md5('{$password}') WHERE `user_id` = $user_id";
            $result = mysqli_query($strcon, $query);  
            $strcon->close();
            header('location: index.php'); 
 
        }
            
        
}         
?>
 