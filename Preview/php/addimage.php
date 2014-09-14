
<?php
/*echo"<script language='javascript'> 
alert('Slider actualizado exitosamente'); 
</script> 
";*/
if(isset($_POST))
{
$connection = mysqli_connect('localhost','root','bol2014','beatsonlife') or die(mysqli_error($connection));
$image = mysqli_real_escape_string($connection,$_POST['image']);
$title = mysqli_real_escape_string($connection,$_POST['title']);
$query  = "INSERT INTO `images`(`titulo`,`imagen`) VALUES ('".$title."', '".$image."')";
mysqli_query($connection,$query);
header('Location:success.php');
}

?>

