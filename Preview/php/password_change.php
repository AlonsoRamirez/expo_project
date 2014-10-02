<?php
session_start();
if(isset($_POST))
{
$connection = mysqli_connect('localhost','root','bol2014','beatsonlife') or die(mysqli_error($connection));
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$pass = mysqli_real_escape_string($connection,$_POST['confirmPassword']);
$query  = "UPDATE administrador SET admin_pass='$pass' WHERE admin_id=".$_SESSION['id']."";
mysqli_query($connection,$query);
header("Location:success_password.php");
}
?>