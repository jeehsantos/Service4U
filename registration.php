<?php
session_start();
include('connection.php');
include('index.php');
 
 
 

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword =  $_POST['repassword'];
$query = "SELECT email  FROM users WHERE email = '$email'";
$result = mysqli_query($strcon, $query);        
  
if (!$result) die($strcon->error);
//If the user has announces, the announces are going to be deleted otherwise only the user will be deleted
if(mysqli_num_rows($result) > 0){
    $_SESSION['user_registered'] = true;
    echo '<h1>user already registered</h1>a';
}else{ 
$query = "INSERT INTO users (fullName, email, address, postCode, phone, city, password, references_id, user_id, img_user, role_id) VALUES ('$name', '$email', '',null ,null , '', MD5('$password'),null , null , '',2 )";

    if ($strcon->query($query) === TRUE) {
        header("location: index.php");
    } else {
        echo "Error: " . $query . "<br>" . $strcon->error;
    }
}

$result->close();
$strcon->close();

?>