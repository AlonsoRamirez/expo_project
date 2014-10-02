<?php
error_reporting(0);
session_start();
$connection= mysqli_connect("localhost", "root", "bol2014", "beatsonlife");
if ($connection->connect_errno)
{
       echo "Fallo al conectar a MySQL: (" . $connection->connect_errno . ") " . $connection->connect_error;
       exit();
}
@mysqli_query($connection, "SET NAMES 'utf8'");
if ($_POST['user'] == null ||  $_POST['pass'] == null)
{
    echo '<p>Por favor complete todos los campos.</p>';
}
if (! $_POST['user'] == null || ! $_POST['pass'] == null)
{
$user = mysqli_real_escape_string($connection,$_POST['user']);
$pwd = mysqli_real_escape_string($connection,$_POST['pass']);
$query  = mysqli_query($connection,"SELECT usuario_cli, password_cli FROM usuario WHERE usuario_cli='$user' AND password_cli='$pwd'");
$row = mysqli_fetch_array($query) or die(mysql_error()); 
    if (count($row)>0)
    {
        $_SESSION["LOGIN"] = $user;;
        echo '<script>location.href = "shopping_cart.php"</script>';
    }
 }

?>