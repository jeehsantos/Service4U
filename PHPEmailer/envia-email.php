<?php
if(!isset($_SESSION)) 
{
    session_start(); 
}
include_once('connection.php');
include_once('login.php');
 
  
$user_id = $_SESSION['user_id'];

//error_reporting(0);
//$nome = utf8_encode($_POST['name']);
//$sobrenome = utf8_encode($_POST['sobrenome']);
//$email = utf8_encode($_POST['id_user']);
//$mensagem = utf8_encode($_POST['mensagem']);
 
/*
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
$mail->Subject = "Service announce interest"; //subject email

$conteudo_email = " Voce recebeu uma mensagem de $nome $sobrenome:
<br> <br>
Mensagem: Saaalveeeeeeeeeeeeeee parsaaaaaaaaaaaaaaaaaaa<br>
";
$mail->IsHTML(true);
$mail->Body = $conteudo_email;
if ($mail->send()){
    echo "E-mail enviado com sucesso!";
} else {
    echo "Falha ao enviar o e-mail: ". $mail->ErrorInfo;
}
*/
?>