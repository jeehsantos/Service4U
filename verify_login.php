<?php
 
if(!$_SESSION['user']){
    header('Location: index.php');
    die();
}
?>