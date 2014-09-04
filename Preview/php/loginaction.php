 <?php
/*Conexión a BD*/
 
$connection =mysqli_connect('localhost','root','bol2014','beatsonlife') or die(mysqli_error($connection));



if(isset($_POST['submit'])) 
    {
     $user=  mysqli_real_escape_string($connection,$_POST['username']);
     $contra= mysqli_real_escape_string($connection,$_POST['password']);
   $query = mysqli_query($connection,"SELECT * from administrador where admin_name='".$user."' and admin_pass='".$contra. "'");
   $row = mysqli_fetch_array($query) or die(mysql_error()); 

  if(count($row)>=1)
        {
            header("Location:indexadmin.php");
        }
        else
        {
            echo("Usuario incorrecto o contraseña incorrecta.");
        }        
  
  }
    


?>

