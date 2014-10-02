
<?php
/*echo"<script language='javascript'> 
alert('Slider actualizado exitosamente'); 
</script> 
";*/
if(isset($_POST))
{
$connection = mysqli_connect('localhost','root','bol2014','beatsonlife') or die(mysqli_error($connection));
$product = mysqli_real_escape_string($connection,$_POST['product']);
$query  = "DELETE FROM `producto` WHERE `codigo_pr`=".$product."";
mysqli_query($connection,$query);
header('Location:productoeliminado.php');
}

?>

