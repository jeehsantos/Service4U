<?php
session_start();
include('index.php');
include('connection.php');
 
 

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword =  $_POST['repassword'];

$query = "INSERT INTO users (fullName, email, address, postCode, phone, city, password, references_id, user_id, img_user, role_id) VALUES ('$name', '$email', '',null ,null , '', MD5('$password'),null , null , '',2 )";

if ($strcon->query($query) === TRUE) {
    header("location: index.php");
} else {
    echo "Error: " . $query . "<br>" . $strcon->error;
}

mysqli_close($strcon);

?>