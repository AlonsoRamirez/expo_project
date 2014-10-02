<?php
$connection = mysqli_connect('localhost','root','bol2014','beatsonlife') or die(mysqli_error($connection));
$usuario = mysqli_real_escape_string($connection,$_POST['user']);
$total = mysqli_real_escape_string($connection,$_POST['total']);
$query  = "INSERT INTO `compra`(`nombre_usuario`,`total`) VALUES ('".$usuario."', '".$total."')";
mysqli_query($connection,$query);
header('Location:success_shop.php');
?>