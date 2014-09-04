<?php 
if(isset($_POST['nombre']) && !empty($_POST['nombre']) 
&& isset($_POST['phone']) && !empty($_POST['phone']) 
&& isset($_POST['email']) && !empty($_POST['email'])
&& isset($_POST['password']) && !empty($_POST['password'])
&& isset($_POST['message']) && !empty($_POST['message']))
{


	$to ="alonsoramirez1@gmail.com";
	$from ="Beats On Life Contact";
    $subject="Comments";
	$mensaje="Nombre:".$_POST['nombre']."";
	$mensaje="Télefono:".$_POST['phone']."";
	$mensaje="Email:".$_POST['email']."";
	$mensaje="Comentario:".$_POST['message']."";
	mail($to, $subject,$mensaje,$from);
	header('Location:emailsent.php');
}
else
{
	echo "Problemas al enviar";
}


?> 
