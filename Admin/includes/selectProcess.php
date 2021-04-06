<?php
if(!isset($_SESSION)) 
{
    session_start(); 
}
$servername = "localhost";
$username = "root";
$password = "";
$db = "service4u";

$strcon = mysqli_connect($servername, $username, $password, $db ) or die('Was not possible to connect to your database');

 
$query = "SELECT * FROM process_area";
$result = mysqli_query($strcon, $query);

if (!$result) die($strcon->error);
while($row_announce = mysqli_fetch_assoc($result)){
    echo' <option value=' . $row_announce['id'] . '>' . $row_announce['process_type'] .'</option>';
}
$result->close();
?>