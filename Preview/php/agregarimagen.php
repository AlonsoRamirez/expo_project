<?php
define('DB_SERVER','localhost'); 
define('DB_NAME','beatsonlife'); 
define('DB_USER','root'); 
define('DB_PASS','bol2014'); 
$connection=@mysql_connect('DB_SERVER','DB_USER','DB_PASS') or die(@mysql_error($con));
@mysql_select_db('DB_NAME',$con);

$image = mysqli_real_escape_string($connection,$_POST['image']);
$title = mysqli_real_escape_string($connection,$_POST['title']);
$desc = mysqli_real_escape_string($connection,$_POST['desc']);

$query  = "INSERT INTO `images`(`titulo`,`descripcion`,`imagen`) VALUES ('".$title."', '".$desc."', '".$image."')";
mysqli_query($connection,$query);

header("location: indexadmin.php");
?>