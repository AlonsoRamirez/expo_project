               <?php
if(isset($_POST['submit'])) 
    {
 
$connection =mysqli_connect('localhost','root','bol2014','beatsonlife') or die(mysqli_error($connection));
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$nombre = mysqli_real_escape_string($connection,$_POST['first_name']);
$apellido= mysqli_real_escape_string($connection,$_POST['last_name']);
$genero =mysqli_real_escape_string($connection,$_POST['sex']);
$profession = mysqli_real_escape_string($connection,$_POST['profession']);
$email =mysqli_real_escape_string($connection,$_POST['email']);
$usuario =mysqli_real_escape_string($connection,$_POST['user']);
$password = mysqli_real_escape_string($connection,$_POST['password']);
$query  = "INSERT INTO `usuario`(`nombre_usu`, `apellido_usu`, `genero_usu`, `profesion_cli`, `email_cli`, `usuario_cli`, `password_cli`) VALUES ('".$nombre."', '".$apellido."', '".$genero."', '".$profession."', '".$email."', '".$usuario."', '".$password."')";
mysqli_query($connection,$query);
header("Location:success_user.php");

  }
    


?>



<?php 
include("header_register.php"); 
?> 

<div class="container row">
<div class="nav-control">
<div class="clearfix"></div>
</div>
<div class="form-container">
<form class="form form-horizontal component-uff" data-step-method="sliding" onkeypress="return event.keyCode != 13;" role="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
  <hr>
  <center><i class="fa fa-inbox fa-2x"></i></center>
<h2 class="text-center">REGÍSTRATE</h2>
<hr>

<div class="row">
<div class="col-md-8">
<div class="uff-form-sliding">
<div class="sliding-container">

<div data-step id="Reinfo">
<h4 data-sb="fadeInLeft">Información Personal</h4>
<div class="form-group">
<label class="col-sm-2 control-label" data-sb="fadeInRight">Nombre</label>
<div class="col-sm-10">
<input data-sb="fadeInLeft" type="text" class="form-control" data-validation-required="#first_name_error_required" name="first_name">
<div class="clearfix"></div>
<div id="first_name_error_required" class="alert alert-danger">
Nombre requerido
</div>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" data-sb="fadeInRight">Apellido</label>
<div class="col-sm-10">
<input data-sb="fadeInLeft" type="text" class="form-control" data-validation-required="#last_name_error_required" name="last_name">
<div class="clearfix"></div>
<div id="last_name_error_required" class="alert alert-danger">
Apellido requerido
</div>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" data-sb="fadeInRight">Género</label>
<div class="col-sm-10">
<select name="sex" data-sb="fadeInLeft" class="form-control">
<option value="Personal">Personal</option>
<option value="Mujer">Mujer</option>
<option value="Hombre">Hombre</option>
</select>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" data-sb="fadeInRight">Profesión</label>
<div class="col-sm-10">
<select name="profession" class="form-control" data-sb="fadeInLeft">
<option value="Programador">Programador</option>
<option value="Desarrollador">Desarrollador</option>
<option value="jQuery Fan">jQuery Fan</option>
<option value="No estoy seguro">No estoy seguro</option>
</select>
</div>
</div>
<ul class="pager">
<li class="right" data-sb="bounceInLeft"><a class="next" data-step-next>Siguiente &raquo;</a></li>
</ul>
<div class="clearfix"></div>
</div>
<div data-step >
<h4 data-sb="fadeInLeft">Información de Cuenta</h4>
<div class="form-group">
<label class="col-sm-2 control-label" data-sb="rollIn">Correo</label>
<div class="col-sm-10">
<input data-sb="bounceInLeft" type="text" class="form-control" data-validation-required="#email_error_required" data-validation-email="#email_error_invalid" name="email" id="e">
<div class="clearfix"></div>
<div id="email_error_required" class="alert alert-danger">
Correo es requerido
</div>
<div id="email_error_invalid" class="alert alert-danger">
Correo inválido
</div>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" data-sb="fadeInRight">Usuario</label>
<div class="col-sm-10">
<input data-sb="fadeInLeft" type="text" class="form-control" data-validation-required="#user_error_required" name="user" id="u">
<div class="clearfix"></div>
<div id="user_error_required" class="alert alert-danger">
Usuario requerido
</div>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" data-sb="rollIn">Password</label>
<div class="col-sm-10">
<input data-sb="bounceInLeft" type="password" class="form-control" data-validation-required="#password_error_required" name="password" id="p">
<div class="clearfix"></div>
<div id="password_error_required" class="alert alert-danger">
Password requerida
</div>
</div>
</div>
	<script>
function myFunction() { /*Revisa si todos los campos están llenos y si el email no es inválido*/
    var correo = document.getElementById('e').value;
    var usuario=document.getElementById('u').value;
    var password=document.getElementById('p').value;
    var atpos = correo.indexOf("@");
    var dotpos = correo.lastIndexOf(".");
    if( !correo == "" && !usuario =="" && !password =="")
    {
    	if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=correo.length)  /*Revisa si el email tiene arroba o punto*/
    	{
    		document.getElementById('checkbox').disabled = true;
          
        
        }
        else
        {
        	document.getElementById('checkbox').disabled = false; /*Habilita el checkbox*/
        	document.getElementById('controls').children[0].style.display = "none"; /*Esconde los botones*/
        	document.getElementById('controls').children[1].style.display = "none";
  
        }
    }

}
</script>
<ul class="pager" id="controls">
<li class="left" data-sb="bounceInLeft"><a class="prev" data-step-previous="">&laquo; Anterior</a></li>
<li class="right" data-sb="bounceInLeft" onclick="myFunction()"><a class="next" data-step-finish>Terminar &raquo;</a></li>
<input type="checkbox" name="checkbox" id="checkbox" disabled="disabled" onchange="document.getElementById('submit').disabled = !this.checked;"/> Acepto los términos y condiciones de uso de Beats On Life <!--Con JS, usamos el evento onchange() cuando cambia el estado del checkbox-->
<center><input class="btn btn-contact" type="submit"  id="submit" value="Terminar" name="submit" disabled="disabled" /></center>
</ul>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
<div class="col-md-4">
<h4 class="text-center">Tu Perfil</h4>
<div class="cascading-container">
<div data-step-mirror-cascading>
<hr class="register">
<h5>Información Personal</h5>
<hr class="register">
<p>Nombre : <span data-input-mirror='[name="first_name"]'></span></p>
<p>Apellido : <span data-input-mirror='[name="last_name"]'></span></p>
<p>Género : <span data-input-mirror='[name="sex"]'></span></p>
<p>Profesión : <span data-input-mirror='[name="profession"]'></span></p>
</div>
<div data-step-mirror-cascading>
<hr/>
<h5>Información de la Cuenta</h5>
<hr/>
<p>Email : <span data-input-mirror='[name="email"]'></span></p>
<p>Usuario : <span data-input-mirror='[name="user"]'></span></p>
<p>Password : <span data-input-mirror='[name="password"]'></span></p>
</div>
</div>
</div>
</div>


</form>
</div>
</div>

<?php
include("header_footer_register.php");
?>