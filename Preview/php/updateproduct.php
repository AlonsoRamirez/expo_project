
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
$id = mysqli_real_escape_string($connection,$_POST['product']);
$query  = "UPDATE `producto` SET `nombre_pr`= '$nombre',`categoria_pr`= '$categoria', `descripcion_pr`= '$descripcion', `precio_pr`= '$precio' WHERE `codigo_pr`=".$id."";
mysqli_query($connection,$query);
header('Location:success_update.php');
}


?>

