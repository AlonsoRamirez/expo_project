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
    $user = mysqli_real_escape_string($connection, $_POST['user']);
    $pass = mysqli_real_escape_string($connection, $_POST['pass']); 
    $consulta = mysqli_query($connection, "SELECT admin_name, admin_pass FROM administrador WHERE admin_name = '$user' AND admin_pass = '$pass'");
    $row = mysqli_fetch_array($consulta) or die(mysql_error()); 
    if (count($row)>0)
    {
        $_SESSION["LOGIN"] = $user;
        echo '<script>location.href = "paneladmin.php"</script>';
    }
    /*else
    {
      echo '<p>Usuario o contraseña incorrectos.</p>';
    }*/
}


?>