<?php
 include('connection.php');

if(!$_SESSION['id_user']){
    include_once('includes/navbar.php');
}else{
    $teste = $_SESSION['id_user'];
    include_once('includes/loggedNavBar');
}
?>