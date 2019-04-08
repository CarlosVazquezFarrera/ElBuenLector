<?php 
    require ("PHPMailer/Exception.php");
    require ("PHPMailer/PHPMailer.php");
    require  ("PHPMailer/SMTP.php");

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    function enviarEmail($email)
    {
        $cuerpo = "Prueba"; 
                
        $mail = new PHPMailer(true);
        
		$mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) );
		$mail->isSMTP();
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'tls';
		$mail->Host = 'smtp.gmail.com'; 
        $mail->Port = '587'; 
		
		$mail->Username ='elbuenlectormx@gmail.com'; 
		$mail->Password = 'elbuenlector1997';
		
		$mail->setFrom('elbuenlectormx@gmail.com', 'ElBuenLector');
    
		$mail->addAddress($email);
		
		$mail->Subject = 'Registro exitoso';
        $mail->Body    = $cuerpo;
        $mail->Charset = 'UTF-8';
		$mail->IsHTML(true);
		
		if($mail->send())
            return true;
        else
            return false;
	}


    function showValue($input)
    {
        if (isset($_POST[$input]))
        {
            echo "value = '{$_POST[$input]}' ";
        }
    }
    
?>