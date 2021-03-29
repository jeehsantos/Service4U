<?php
if(!isset($_SESSION)) 
{
    session_start(); 
}

//$announce_title =  $_SESSION['annouce-title'];

if(isset($_POST['message-btn'])):
include_once('../connection.php');
include_once('../login.php');
 
//error_reporting(0);
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM users WHERE user_id = '$user_id'";
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
$mail->addAddress($email,"blalalal"); //to
$mail->Subject = "$announce_title"; //subject email

$conteudo_email = "You received a message from: $nome :
<br>Email contact: $email <br>
Mensagem: $mensagem<br>
Phone: $phone <br>
";
$mail->IsHTML(true);
$mail->Body = $conteudo_email;
if ($mail->send()){
    header('Location: ../announces.php');
} else {
    echo "Falha ao enviar o e-mail: ". $mail->ErrorInfo;
}
endif;
?>