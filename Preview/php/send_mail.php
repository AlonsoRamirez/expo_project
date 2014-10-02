<?php
              $nombre = $_POST['nombre'];
		$motivo = $_POST['issue'];
		$mail = $_POST['email'];
		$mensaje = $_POST['message'];
		require('phpmailer/class.phpmailer.php');
		require('phpmailer/class.smtp.php');

		$mail = new PHPMailer();

		$mail->isSMTP();
		$mail->SMTPDebug=2;
		$mail->Debugoutput="html";
		$mail->Host="smtp.gmail.com";
		$mail->Port=465;
		$mail->SMTPSecure="ssl"; /** lel **/
		$mail->SMTPAuth=true;
		$mail->Username="beatsonlife2014@gmail.com";
		$mail->Password="beats2014";


			$mail->SetFrom($_POST['mail'],$_POST['nombre']);
			$mail->AddAddress('beatsonlife2014@gmail.com','Beats On Life');
			$mail->Subject="Comentarios";
			$mail->msgHTML('<h4>Nombre:</h4>'.$_POST['nombre'].'<br>'.'<h4>Motivo:</h4>'.$_POST['issue'].'<br>'.'<h4>Correo:</h4>'.$_POST['email'].'<br>'.'<h4>Mensaje:</h4>'.$_POST['message']);
			$mail->Send();
			$mail->ClearAddresses();
	header('Location:emailsent.php');
?>