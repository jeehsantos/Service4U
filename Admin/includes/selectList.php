<?php
if(!isset($_SESSION)) 
{
    session_start(); 
}
include_once('../connection.php');
 
$query = "SELECT * FROM industry_area";
$result = mysqli_query($strcon, $query);

if (!$result) die($strcon->error);
while($row_announce = mysqli_fetch_assoc($result)){
    echo' <option value=' . $row_announce['id'] . '>' . $row_announce['service_type'] .'</option>';
}
$result->close();
?>