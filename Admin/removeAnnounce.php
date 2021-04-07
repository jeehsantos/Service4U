<?php
if(!isset($_SESSION)) 
{
    session_start(); 
}
 
include_once('../connection.php');
//The user ID is sent through url (GET) and then the filter_input is going to get the number id
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$query = "SELECT user_announce.*, review_tb.* FROM user_announce, review_tb WHERE user_announce.announce_id = review_tb.announce_id AND user_announce.announce_id = '$id'";
$result = mysqli_query($strcon, $query);  
//If the user has announces, the announces are going to be deleted otherwise only the user will be deleted
if(mysqli_num_rows($result) > 0){
    $query = "DELETE review_tb.*, user_announce.* FROM user_announce, review_tb WHERE review_tb.announce_id = user_announce.announce_id AND review_tb.announce_id = '$id'";
    echo "$query";
    $result = mysqli_query($strcon,$query);
    //If any change in the table the message is going to be displayed and redirect to the admin page
   if(mysqli_affected_rows($strcon)){
    $_SESSION['msg'] = "<h1 style='color:green;'>Announce deleted</h1>";
    header('location: index.php');
    }else{
        $_SESSION['msg'] = "<p style='color:green;'>User was not deleted</p>";
        header('location: index.php');
    }
}else{

   
    $query = "DELETE  FROM user_announce WHERE announce_id = '$id'";
  echo "$query";
 
    $result = mysqli_query($strcon,$query);
    
    //If any change in the table the message is going to be displayed and redirect to the admin page
    if(mysqli_affected_rows($strcon)){
        $_SESSION['msg'] = "<p style='color:green;'>Announce deleted</p>";
        header('location: index.php');
        }else{
            $_SESSION['msg'] = "<p style='color:green;'>Announce was not deleted</p>";
            header('location: index.php');
        }

    }
$result->close();
$strcon->close();
 
 
?>