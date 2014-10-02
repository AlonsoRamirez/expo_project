<?php
session_start();
if (isset($_SESSION['LOGIN']))
{
 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beats On Life | Administrador</title>
 <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
   <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../css/local_admin.css" />
    <script src="../js/jquery-1.10.2.js"></script>
     <script src="../js/bootstrapValidator.js"></script>
    <script src="../js/bootstrap.js"></script>

</head>
<body>

    <div id="wrapper">

          <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="paneladmin.php">Beats On Life</a>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul id="active" class="nav navbar-nav side-nav">
                    <li ><a href="paneladmin.php"><i class="fa fa-bullseye"></i> Panel de Administrador</a></li>
                    <li><a href="addproducts.php"><i class="fa fa-plus-square"></i> Agregar Productos</a></li>
                       <li><a href="update_products.php"><i class="fa  fa-pencil-square"></i> Actualizar Productos</a></li>
                    <li><a href="eliminarproductos.php"><i class="fa fa-minus-square"></i> Eliminar Productos</a></li>
                    <li><a href="consulta.php"><i class="fa fa-list-ol"></i> Consultar Productos</a></li>
                    <li><a href="addnew.php"><i class="fa fa-picture-o"></i> Slider dinámico</a></li>
             <li><a href="edit_news.php"><i class="fa fa-globe"></i> Noticias</a></li>
                    <li><a href="report_shop.php"><i class="fa fa-shopping-cart"></i> Reporte de Compra</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="../img/<?php echo $_SESSION['LOGIN'];?>.ico">
                             <?php echo $_SESSION["LOGIN"];?>
                              <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="home.php" target="_blank"><i class="fa fa-home"></i> Ir a Página Principal</a></li>
                            <li><a href="change_password.php"><i class="fa fa-gear"></i> Configuración de Cuenta</a></li>
                            <li><a href="logout.php"><i class="fa fa-power-off"></i> Cerrar Sesión</a></li>

                        </ul>
                    </li>
                    
                </ul>
            </div>
        </nav>
<script>
   function validarContraseña() {
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirmPassword').value;
    if (password != confirmPassword )
    {
          $("#divCheckPasswordMatch").html("Contraseñas no coinciden <i class='fa fa-times'></i>");
       document.getElementById('submit').disabled = true;
    }
           

    else
    {
  $("#divCheckPasswordMatch").html("Contraseñas coinciden <i class='fa fa-check'></i>");
    document.getElementById('submit').disabled = false;
    }
  


    if (confirmPassword =="")
    {
      $("#divCheckPasswordMatch").html("");
   document.getElementById('submit').disabled = true;
   }


    
}
</script>

        <div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <center><h1>Configuración de Cuenta</h1></center>
                    <center><hr width="600"></center>

                    <form id="registerForm" class="form-horizontal" method="POST" action="password_change.php">
    <div class="form-group">
        <label class="col-lg-3 control-label">Contraseña</label>
        <div class="col-lg-5">
            <input type="password" class="form-control" id="password" name="Password" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-3 control-label">Confirmar Contraseña</label>
        <div class="col-lg-5">
            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" onKeyUp="validarContraseña();"/>
        </div>
    </div>

   <center> <div class="registrationFormAlert" id="divCheckPasswordMatch"></div></center>
        <br>
    
<br>

    <center>  <input class="btn btn-primary" type="submit"  id="submit" value="Terminar" name="submit" disabled="disabled"/></center>


</form>


                </div>
            </div>
        
        
        </div>

    </div>
    <!-- /#wrapper -->
    
</body>
</html>
<?php
}
else
{
    echo '<script>location.href = "loginadmin.php";</script>'; 
}
?>
