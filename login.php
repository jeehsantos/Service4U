<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
include('connection.php');
include('index.php');
 
if(empty($_POST['user']) || empty($_POST['password'])){
    header('Location: index.php');
    exit();
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
$email = mysqli_real_escape_string($strcon, $_POST['email']);
$password = mysqli_real_escape_string($strcon, $_POST['password']);
$query = "SELECT * FROM `users` WHERE email = '$email' and password = md5('{$password}')";
   


$result = mysqli_query($strcon, $query);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$active = $row['active'];
      
$count = mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
  
if($count == 1) {
   
   header("location: aboutus.php");
}else {
   $error = "Your Login Name or Password is invalid";
}
}

?>