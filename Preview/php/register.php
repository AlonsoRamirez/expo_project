<?php 
include("header_register.php"); 
?> 

<div class="container row">
<div class="nav-control">
<div class="clearfix"></div>
</div>
<div class="form-container">
<form class="form form-horizontal component-uff" data-step-method="sliding" onkeypress="return event.keyCode != 13;" role="form">
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
<option value="1">Personal</option>
<option value="2">Mujer</option>
<option value="3">Hombre</option>
</select>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" data-sb="fadeInRight">Profesión</label>
<div class="col-sm-10">
<select name="profession" class="form-control" data-sb="fadeInLeft">
<option value="1">Programador</option>
<option value="2">Desarrollador</option>
<option value="3">jQuery Fan</option>
<option value="4">No estoy seguro</option>
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
<input data-sb="bounceInLeft" type="text" class="form-control" data-validation-required="#email_error_required" data-validation-email="#email_error_invalid" name="email">
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
<label class="col-sm-2 control-label" data-sb="rollIn">Contrase&ntilde;a</label>
<div class="col-sm-10">
<input data-sb="bounceInLeft" type="password" class="form-control" data-validation-required="#password_error_required" name="password">
<div class="clearfix"></div>
<div id="password_error_required" class="alert alert-danger">
Contrase&ntilde;a requerida
</div>
</div>
</div>
<ul class="pager">
<li class="left" data-sb="bounceInLeft"><a class="prev" data-step-previous="">&laquo; Anterior</a></li>
<li class="right" data-sb="bounceInLeft"><a class="next" data-step-finish>Terminar &raquo;</a></li>
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