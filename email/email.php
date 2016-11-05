<?php
include_once('PHPMailer/class.phpmailer.php');

class email{
    
    function enviarEmail(){
// Instancia de la clase PHPMailer
	$mail = new PHPMailer(); 

        $email=$emailEnv; // Recipients email ID  
        $name="Administracion SynapsisPharma"; // Recipient's name  
        $mail->From = "ezequiel.bandap@gmail.com";  
        $mail->FromName = "Restablecer Contraseña";  
        $mail->AddAddress($email);  
        $mail->AddReplyTo("No-Reply");  
        $mail->WordWrap = 50; // set word wrap  
        $mail->IsHTML(true); // send as HTML  
        $mail->Subject = "Restablecimiento de Contraseña";  
        $mail->Body = "";//HTML Body  
        $mail->AltBody = "This is the body when user views in plain text format"; //Text Body  
        if(!$mail->Send())  
        {  
          echo "Mailer Error: " . $mail->ErrorInfo;  
        }  
        else  
        {  
        //	header("Location:../login/envio.php");
        }
    
    
    }
    
}
?>