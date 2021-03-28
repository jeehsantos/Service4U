<?php
	// error_reporting(0);
	$conexion = mysqli_connect('localhost', 'root', '', 'jeff');
	 
	include 'class.phpmailer.php';
	
//error_reporting(0);
$nome = utf8_encode($_POST['nome']);
$sobrenome = utf8_encode($_POST['sobrenome']);
$email = utf8_encode($_POST['email']);
$mensagem = utf8_encode($_POST['mensagem']);

	$return_arr = array(
		"message" => "Informacion almacenada en la base de datos ....",
		"name" => $nome  ,
		"address" => $sobrenome,
		"email" => $email,
		"phone" => $mensagem 
		
	);


	// Email Sender Credentials
	$emailFromName = "Kiwi Wide";
	$emailFrom = "idreamzjsm@gmail.com";
	$emailFromPass = "xx6098xx";

	// Receiver
	$emailToName = $nome;
	$emailTo = $email; // you can replace any email here

	$message = json_encode($return_arr);

	try {
		$mail->SMTPDebug = 0;                               // SMTP::DEBUG_SERVER or 0
		$mail->isSMTP();                                    //Send using SMTP
		$mail->Host       = 'smtp.gmail.com';               //Set the SMTP server to send through
		$mail->SMTPAuth   = true;                           //Enable SMTP authentication
		$mail->Username   = $emailFrom;                     //SMTP username
		$mail->Password   = $emailFromPass;                 //SMTP password
		$mail->SMTPSecure = 'tls';    						//Enable TLS encryption;
		$mail->Port       = 587;

		$mail->setFrom($emailFrom, $emailFromName);  // Add Sender
		$mail->addAddress($emailTo, $emailToName); // Add Receiver here

		//Attachments
		// $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
		// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
	
		//Content
		$mail->isHTML(true);
		$mail->Subject = 'You received message from '. $name;
		$mail->Body    = $message; // can be HTML string here
		$mail->AltBody = $message; // Text Only

		$mail->send();
		
		echo json_encode($return_arr);
	} catch (Exception $e) {

		$return_arr = array(
			"message" => "Error - Something went wrong...",
			"Mailer Error" => "{$mail->ErrorInfo}",
		);

		echo json_encode($return_arr);
	}

	// old code
	// mysqli_query($conexion,"INSERT INTO info (name,address,email,phone,datei,type,optionq,query,file) VALUES('".$name."','".$address."','".$email."','".$phone."','".$date."','".$type."','".$option."','".$query."','".$file."')");
	
	// $mensaj = "name = "+$name+" address = "+$address+" email = "+$email+" phone = "+$phone+" date = "+$date+"type = "+$type+" option = "+ $option +" query = "+$query;
	// // $mensaj = "name = "+$name+" address = "+$address+" email = "+$email+" phone = "+$phone+" date = "+$date+"type = "+$type+" option = "+$option+" file = "+$file+" query = "+$query;
	// mail($to,"Datos lalalal",$mensaj. $headers);
	
	// echo"<script type='text/javascript'>
	//            alert('Correo Enviado Correctamente');
	//         </script>";	
	// echo json_encode($datos);

?>