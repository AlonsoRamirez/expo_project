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
                    <li><a href="paneladmin.php"><i class="fa fa-bullseye"></i> Panel de Administrador</a></li>
                    <li><a href="portfolio.html"><i class="fa fa-plus-square"></i> Agregar Productos</a></li>
                    <li><a href="blog.html"><i class="fa  fa-pencil-square"></i> Modificar Productos</a></li>
                    <li><a href="eliminarproductos.php"><i class="fa fa-minus-square"></i> Eliminar Productos</a></li>
                    <li class="selected"><a href="consulta.php"><i class="fa fa-list-ol"></i> Consultar Productos</a></li>
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
                    <center><h1>CONSULTAR PRODUCTOS</h1></center>
                    <center><hr width="600"></center>

        <br>
              <ul class="nav nav-tabs">
      <li class="active"><a href="#guitarras" data-toggle="tab">Cuerda</a></li>
      <li><a href="#pianos" data-toggle="tab">Varios</a></li>
       <li ><a href="#violines" data-toggle="tab">Viento-metal</a></li>
      <li><a href="#baterias" data-toggle="tab">Viento-madera</a></li>
       <li ><a href="#bajos" data-toggle="tab">Percusión</a></li>
      <li><a href="#varios" data-toggle="tab">Teclado</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="guitarras">
        <form id="tab">
           <div class="panel-heading">
            <h3 class="panel-title">Cuerda</h3>
          </div>
<table class="table" id="dev-table">
            <thead>
             <tr >
                <th>ID</th>
                <th>Fecha</th>
                <th>Comprador</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td> 1</td>
                <td>Kilgore</td>
                <td>Trout</td>
                <td>kilgore</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Bob</td>
                <td>Loblaw</td>
                <td>boblahblah</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Holden</td>
                <td>Caulfield</td>
                <td>penceyreject</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Holden</td>
                <td>Caulfield</td>
                <td>penceyreject</td>
              </tr>
              <tr>
                <td>5</td>
                <td>Holden</td>
                <td>Caulfield</td>
                <td>penceyreject</td>
              </tr>
              <tr>
                <td>6</td>
                <td>Holden</td>
                <td>Caulfield</td>
                <td>penceyreject</td>
              </tr>
              <tr>
                <td>7</td>
                <td>Holden</td>
                <td>Caulfield</td>
                <td>penceyreject</td>
              </tr>
            </tbody>
          </table> 
          </form>
        </div>
        <div class="tab-pane fade" id="pianos">
      <form id="tab2">
          <div class="panel-heading">
            <h3 class="panel-title">Varios</h3>
          </div>
<table class="table" id="dev-table">
            <thead>
             <tr >
                <th>ID</th>
                <th>Fecha</th>
                <th>Comprador</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td> 1</td>
                <td>Kilgore</td>
                <td>Trout</td>
                <td>kilgore</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Bob</td>
                <td>Loblaw</td>
                <td>boblahblah</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Holden</td>
                <td>Caulfield</td>
                <td>penceyreject</td>
              </tr>
            </tbody>
          </table> 
      </form>
      </div>
      <div class="tab-pane fade" id="violines">
      <form id="tab2">
          <div class="panel-heading">
            <h3 class="panel-title">Viento-metal</h3>
          </div>
<table class="table" id="dev-table">
            <thead>
             <tr >
                <th>ID</th>
                <th>Fecha</th>
                <th>Comprador</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td> 1</td>
                <td>Kilgore</td>
                <td>Trout</td>
                <td>kilgore</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Bob</td>
                <td>Loblaw</td>
                <td>boblahblah</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Holden</td>
                <td>Caulfield</td>
                <td>penceyreject</td>
              </tr>
            </tbody>
          </table> 
      </form>
      </div>
      <div class="tab-pane fade" id="baterias">
      <form id="tab2">
          <div class="panel-heading">
            <h3 class="panel-title">Viento-madera</h3>
          </div>
<table class="table" id="dev-table">
            <thead>
             <tr >
                <th>ID</th>
                <th>Fecha</th>
                <th>Comprador</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td> 1</td>
                <td>Kilgore</td>
                <td>Trout</td>
                <td>kilgore</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Bob</td>
                <td>Loblaw</td>
                <td>boblahblah</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Holden</td>
                <td>Caulfield</td>
                <td>penceyreject</td>
              </tr>
            </tbody>
          </table> 
      </form>
      </div>
      <div class="tab-pane fade" id="bajos">
      <form id="tab2">
          <div class="panel-heading">
            <h3 class="panel-title">Percusión</h3>
          </div>
<table class="table" id="dev-table">
            <thead>
             <tr >
                <th>ID</th>
                <th>Fecha</th>
                <th>Comprador</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td> 1</td>
                <td>Kilgore</td>
                <td>Trout</td>
                <td>kilgore</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Bob</td>
                <td>Loblaw</td>
                <td>boblahblah</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Holden</td>
                <td>Caulfield</td>
                <td>penceyreject</td>
              </tr>
            </tbody>
          </table> 
      </form>
      </div>
      <div class="tab-pane fade" id="varios">
      <form id="tab2">
          <div class="panel-heading">
            <h3 class="panel-title">Teclado</h3>
          </div>
<table class="table" id="dev-table">
            <thead>
             <tr >
                <th>ID</th>
                <th>Fecha</th>
                <th>Comprador</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td> 1</td>
                <td>Kilgore</td>
                <td>Trout</td>
                <td>kilgore</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Bob</td>
                <td>Loblaw</td>
                <td>boblahblah</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Holden</td>
                <td>Caulfield</td>
                <td>penceyreject</td>
              </tr>
            </tbody>
          </table> 
      </form>
      </div>
        </div>
                  
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
