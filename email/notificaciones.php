<?php
include_once('PHPMailer/class.phpmailer.php');
// Instancia de la clase PHPMailer
	//$mail = new PHPMailer(); 
error_reporting(E_ALL);

//$dirijido = $_POST['dirijido'];
//$asunto = $_POST['asunto'];

class notificaciones{

   
    
function notificaciones_email($emailEnv,$nombre){
  
    $mail = new PHPMailer(); 
$email="ezequiel.bandap@gmail.com"; // Recipients email ID  
$name=" Sanco Business RH "; // Recipient's name  
$mail->From = $emailEnv;  
$mail->FromName = "Sanco Business Manager";  
$mail->AddAddress($email,$name);  
$mail->AddReplyTo("No-reply");  
$mail->WordWrap = 50; // set word wrap  
$mail->IsHTML(true); // send as HTML  
$mail->Subject = "Registro de nuevo usuario";  
$mail->Body =  "Se registro un nuevo usurio, Correo: ".$emailEnv." Nombre:".$nombre."";//HTML Body  
$mail->AltBody = "This is the body when user views in plain text format"; //Text Body 
    
if(!$mail->Send())  
{  
  echo "Mailer Error: " . $mail->ErrorInfo;  
}  
else  
{  
  echo "Message has been sent";

  header('Location:../nuevorep.php');  
} 
//return $email;
}
}