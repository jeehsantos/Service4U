<?php
if(!isset($_SESSION)) 
{
    session_start(); 
}
include_once('connection.php');
include('viewAnnounce.php');
$message = $_POST['messageReview'];
$announce_id = $_SESSION['announce-id'];
$query = "INSERT INTO review_tb (comment, announce_id) VALUES ('$message', '$announce_id')";

$result = mysqli_query($strcon, $query);
if ($strcon->query($query) === TRUE) {
    header("location: announces.php");
}


?>