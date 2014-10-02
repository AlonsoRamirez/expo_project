
<?php
if(isset($_POST))
{

$connection = mysqli_connect('localhost','root','bol2014','beatsonlife') or die(mysqli_error($connection));
$title = mysqli_real_escape_string($connection,$_POST['titulo']);
$cat = mysqli_real_escape_string($connection,$_POST['categoria']);
$text = mysqli_real_escape_string($connection,$_POST['text']);
$noticia = mysqli_real_escape_string($connection,$_POST['noticia']);
$query  = "INSERT INTO `noticias`(`titulo`,`categoria`, `texto`, `texto_completo`) VALUES ('".$title."', '".$cat."', '".$text."', '".$noticia."')";
mysqli_query($connection,$query);
header('Location:news_success.php');
}

?>

