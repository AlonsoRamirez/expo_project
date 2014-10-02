<?php
if(isset($_POST))
{
$link = mysqli_connect('localhost','root','bol2014','beatsonlife') or die(mysqli_error($link));
$nombre = mysqli_real_escape_string($link,$_POST['nombre']);
$email = mysqli_real_escape_string($link,$_POST['email']);
$data = mysqli_real_escape_string($link,$_POST['data']);
$new_id = mysqli_real_escape_string($link,$_POST['new_id']);
$ip = $_SERVER['REMOTE_ADDR'];
$query=mysqli_query($link,"insert into comentarios(nombre,email,comentario,comentarioip,noticia_id) values('$nombre','$email','$data','$ip','$new_id')");
mysqli_query($link,$query);
header('Location:sent.php');
}

?>