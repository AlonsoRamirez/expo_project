<?php
include("header_login_admin.php");
?>
        <center>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h5 class="text-center">
                        Beats On Life</h5>
                    <form class="form form-signup" role="form" method="post" action="" name="frm"  >
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-user"></span></span>
                            <input type="text" class="form-control" name="username"  id="username" placeholder="Usuario"  required="required"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-lock"></span></span>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Contrase&ntilde;a"  required="required"/>
                        </div>
                    </div>
                </div>
                <input type="submit" name="submit" value="Entrar"  class="btn btn-sm btn-primary btn-block">

               <br>
               <p style="text-align:center;"><a href="register.php">¿Nuevo Usuario? ¡Regístrate!</a></p>
               </form>

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


        
            </div>
                 </div>
    </div>
</div>
</div> 
                </center> 	
           </div>
</body>
</html>
