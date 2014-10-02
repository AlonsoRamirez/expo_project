
<?php
/*echo"<script language='javascript'> 
alert('Slider actualizado exitosamente'); 
</script> 
";*/
if(isset($_POST))
{
$connection = mysqli_connect('localhost','root','bol2014','beatsonlife') or die(mysqli_error($connection));
$nombre = mysqli_real_escape_string($connection,$_POST['nombre']);
$categoria = mysqli_real_escape_string($connection,$_POST['encabezado']);
$descripcion = mysqli_real_escape_string($connection,$_POST['descripcion']);
$precio = mysqli_real_escape_string($connection,$_POST['precio']);
$image = mysqli_real_escape_string($connection,$_POST['image']);
$query  = "INSERT INTO `producto`(`nombre_pr`,`categoria_pr`,`descripcion_pr`,`precio_pr`,`imagen_pr`) VALUES ('".$nombre."', '".$categoria."', '".$descripcion."', '".$precio."', '".$image."')";
mysqli_query($connection,$query);
header('Location:success_added.php');
}

?>

