<?php
if(!isset($_SESSION)) 
{
    session_start(); 
}

 

if(isset($_POST['message-btn'])):
include_once('../connection.php');
include_once('../login.php');
$announce_title =  $_SESSION['announce-title'];
//error_reporting(0);
//Look to the announce owner
$announce_id = $_SESSION['announce-id'];
 
$query = "SELECT u.*, a.announce_id, a.user_id FROM user_announce a INNER JOIN users u ON u.user_id = a.user_id HAVING a.announce_id =  '$announce_id'";
$result = mysqli_query($strcon, $query);
$data = mysqli_fetch_array($result);
$nome = utf8_encode($data['fullName']);
$phone = utf8_encode($data['phone']);
$email = utf8_encode($data['email']);
$mensagem = utf8_encode($_POST['message']);
 
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();

//Email server config
$mail->SMTPKeepAlive = true;   
 
$mail->Host = 'smtp.gmail.com';  
$mail->Port= 587;
$mail->SMTPSecure = "tls";
$mail->SMTPAuth = true;
$mail->Username = "idreamzjsm@gmail.com";
$mail->Password = "xx6098xx";

// Message config
$mail->setFrom($mail->Username, $nome); //from
$mail->addAddress($email,"not-reply"); //to
$mail->Subject = "$announce_title"; //subject email

$conteudo_email = "You have received a new message from your announce: ". $announce_title .

"<br><br>Message: <br><br> $mensagem";
$mail->IsHTML(true);
$mail->Body = $conteudo_email;
if ($mail->send()){
    header('Location: ../announces.php');
} else {
    echo "Falha ao enviar o e-mail: ". $mail->ErrorInfo;
}
endif;
?>