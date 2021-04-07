<?php
if(!isset($_SESSION)) 
{
    session_start(); 
}
include_once('connection.php');

if(isset($_POST['commentBtn'])){
$message = $_POST['messageReview'];
$announce_id = $_SESSION['announce-id'];
$query = "INSERT INTO review_tb (comment, announce_id) VALUES ('$message', '$announce_id')";
$result = $strcon->query($query);
    if ($result === TRUE) {
        header("location: announces.php");
    }


}

$result->close();
mysqli_close($strcon);
?>