<?php
session_start();
if(empty($_SESSION['count']))
{
$_SESSION['count']=1;


}
else
{
    $_SESSION['count']++;

}
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
                    <li class="selected"><a href="paneladmin.phps"><i class="fa fa-bullseye"></i> Panel de Administrador</a></li>
                    <li><a href="portfolio.html"><i class="fa fa-plus-square"></i> Agregar Productos</a></li>
                    <li><a href="blog.html"><i class="fa  fa-pencil-square"></i> Modificar Productos</a></li>
                    <li><a href="eliminarproductos.php"><i class="fa fa-minus-square"></i> Eliminar Productos</a></li>
                    <li><a href="consulta.php"><i class="fa fa-list-ol"></i> Consultar Productos</a></li>
                    <li><a href="addnew.php"><i class="fa fa-picture-o"></i> Slider dinámico</a></li>
                    <li><a href="forms.html"><i class="fa fa-globe"></i> Noticias</a></li>
                    <li><a href="typography.html"><i class="fa fa-shopping-cart"></i> Reporte de Compra</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['LOGIN']; ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-gear"></i> Configuración de Cuenta</a></li>
                            <li><a href="logout.php"><i class="fa fa-power-off"></i> Cerrar Sesión</a></li>

                        </ul>
                    </li>
                    
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <h1>Bienvenido/a,  <?php echo $_SESSION['LOGIN']; ?> <i class="fa fa-cogs"></i> </h1> 
                   <h1> <small>En su lado izquierdo, se presentan todas las opciones que usted tiene para modificar el sitio web de Beats On Life. 
                    Además, puede modificar su contraseña o cerrar sesión en el menú que se encuentra debajo de su nombre de usuario.</small></h1>
                    <hr>
                  <h4>Visitas al panel de administración en esta sesión: <?php echo $_SESSION['count'];?> </h4>
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
