<?php
session_start();
include('connection.php');


 
if(isset($_POST['announce-enter'])){
 if(empty($_SESSION['id_user'])){
    echo "<h5 class='message-alert' style='background-color:red; text-align: center; color: white; margin-bottom: 0px;'>You have to log in to have an announce</h5>";

 }else{
    include('includes/newService.php');
$email = $_SESSION['id_user'];
 
$area = $_POST['area'];
$process = $_POST['process'];
$location = $_POST['location'];
        if(isset($_POST['fixed'])){
        /*It is not validating properly*/
            $rdoButton  =  1;
        }else{
        $rdoButton  =  2; 
        }

$priceAnnounce = $_POST['price-announce'];
$phone = $_POST['phone'];
$titleAnnounce =  $_POST['title-announce'];
$descriptionAnnounce = $_POST['announce-description'];
$query = "INSERT INTO `user_announce`(`service_type`, `process_type`, `user_location`, `condition_pay`, `price`, `phone`, `announce_title`, `description`,`user_id`) VALUES ('$area','$process','$location','$rdoButton','$priceAnnounce','$phone','$titleAnnounce','$descriptionAnnounce', '11')";
$result = $strcon->query($query);
        if ($result === TRUE) {
            header("location: announces.php");
            echo "Success";
        } else {
            echo "Error: " . $query . "<br>" . $strcon->error;
        }

}
$result->close();
mysqli_close($strcon);
}
 

?>