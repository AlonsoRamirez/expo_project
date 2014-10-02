<?php
$connection = mysqli_connect('localhost','root','bol2014','beatsonlife') or die(mysqli_error($connection));
$query  = "SELECT `codigo_pr`, `nombre_pr`, `descripcion_pr`, `precio_pr` FROM `producto` WHERE `categoria_pr`= \"Cuerda\"";
$query1  = "SELECT `codigo_pr`, `nombre_pr`, `descripcion_pr`, `precio_pr` FROM `producto` WHERE `categoria_pr`= \"Percusion\"";
$query2  = "SELECT `codigo_pr`, `nombre_pr`, `descripcion_pr`, `precio_pr` FROM `producto` WHERE `categoria_pr`= \"Viento-madera\"";
$query3  = "SELECT `codigo_pr`, `nombre_pr`, `descripcion_pr`, `precio_pr` FROM `producto` WHERE `categoria_pr`= \"Viento-metal\"";
$query4 = "SELECT `codigo_pr`, `nombre_pr`, `descripcion_pr`, `precio_pr` FROM `producto` WHERE `categoria_pr`= \"Varios\"";
$query5  = "SELECT `codigo_pr`, `nombre_pr`, `descripcion_pr`, `precio_pr` FROM `producto` WHERE `categoria_pr`= \"Teclado\"";
$res    = mysqli_query($connection,$query);
$res1   = mysqli_query($connection,$query1);
$res2   = mysqli_query($connection,$query2);
$res3    = mysqli_query($connection,$query3);
$res4   = mysqli_query($connection,$query4);
$res5    = mysqli_query($connection,$query5);
$count  =   mysqli_num_rows($res);
$count1  =   mysqli_num_rows($res1);
$count2  =   mysqli_num_rows($res2);
$count3  =   mysqli_num_rows($res3);
$count4  =   mysqli_num_rows($res4);
$count5  =   mysqli_num_rows($res5);
$print='';
$print1='';
$print2='';
$print3='';
$print4='';
$print5='';


 while($row=mysqli_fetch_array($res))
    {
       $codigo = $row['codigo_pr'];
        $nombre = $row['nombre_pr'];
        $descripcion = $row['descripcion_pr'];
        $precio = $row['precio_pr'];
          $print.="<tr>
                <td>".$codigo."</td>
                <td>".$nombre."</td>
                <td>".$descripcion."</td>
                <td>".$precio."</td>
              </tr>";
 
        
    }

    while($row=mysqli_fetch_array($res1))
    {
 
        $codigo = $row['codigo_pr'];
        $nombre = $row['nombre_pr'];
        $descripcion = $row['descripcion_pr'];
        $precio = $row['precio_pr'];
           $print1.="<tr>
                <td>".$codigo."</td>
                <td>".$nombre."</td>
                <td>".$descripcion."</td>
                <td>".$precio."</td>
              </tr>";
 
    }

    while($row=mysqli_fetch_array($res2))
    {
        $codigo = $row['codigo_pr'];
        $nombre = $row['nombre_pr'];
        $descripcion = $row['descripcion_pr'];
        $precio = $row['precio_pr'];
           $print2.="<tr>
                <td>".$codigo."</td>
                <td>".$nombre."</td>
                <td>".$descripcion."</td>
                <td>".$precio."</td>
              </tr>";
 
 
        
    }

    while($row=mysqli_fetch_array($res3))
    {
        $codigo = $row['codigo_pr'];
        $nombre = $row['nombre_pr'];
        $descripcion = $row['descripcion_pr'];
        $precio = $row['precio_pr'];
           $print3.="<tr>
                <td>".$codigo."</td>
                <td>".$nombre."</td>
                <td>".$descripcion."</td>
                <td>".$precio."</td>
              </tr>";
 
 
        
    }

    while($row=mysqli_fetch_array($res4))
    {
        $codigo = $row['codigo_pr'];
        $nombre = $row['nombre_pr'];
        $descripcion = $row['descripcion_pr'];
        $precio = $row['precio_pr'];
           $print4.="<tr>
                <td>".$codigo."</td>
                <td>".$nombre."</td>
                <td>".$descripcion."</td>
                <td>".$precio."</td>
              </tr>";
 
 
        
    }

    while($row=mysqli_fetch_array($res5))
    {
        $codigo = $row['codigo_pr'];
        $nombre = $row['nombre_pr'];
        $descripcion = $row['descripcion_pr'];
        $precio = $row['precio_pr'];
           $print5.="<tr>
                <td>".$codigo."</td>
                <td>".$nombre."</td>
                <td>".$descripcion."</td>
                <td>".$precio."</td>
              </tr>";
 
 
        
    }
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
                    <li><a href="addproducts.php"><i class="fa fa-plus-square"></i> Agregar Productos</a></li>
               <li><a href="update_products.php"><i class="fa  fa-pencil-square"></i> Actualizar Productos</a></li>
                    <li><a href="eliminarproductos.php"><i class="fa fa-minus-square"></i> Eliminar Productos</a></li>
                    <li class="selected"><a href="consulta.php"><i class="fa fa-list-ol"></i> Consultar Productos</a></li>
                    <li><a href="addnew.php"><i class="fa fa-picture-o"></i> Slider dinámico</a></li>
                  <li><a href="edit_news.php"><i class="fa fa-globe"></i> Noticias</a></li>
                    <li><a href="report_shop.php"><i class="fa fa-shopping-cart"></i> Reporte de Compra</a></li>
                </ul>

                  <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="../img/<?php echo $_SESSION['LOGIN'];?>.ico">
                             <?php echo $_SESSION['LOGIN'];?>
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
<table class="table" id="dev-table">
            <thead>
             <tr >
              <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
              
              </tr>
            </thead>
            <tbody>
              
            <?php echo $print;?>
            </tbody>
          </table> 
          </form>
        </div>
        <div class="tab-pane fade" id="pianos">
      <form id="tab2">

<table class="table" id="dev-table">
            <thead>
             <tr >
           <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
              
              </tr>
            </thead>
            <tbody>
                      <?php echo $print4;?>
            </tbody>
          </table> 
      </form>
      </div>
      <div class="tab-pane fade" id="violines">
      <form id="tab2">
        
<table class="table" id="dev-table">
            <thead>
             <tr >
      <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
              </tr>
            </thead>
            <tbody>
                 <?php echo $print2;?>
            </tbody>
          </table> 
      </form>
      </div>
      <div class="tab-pane fade" id="baterias">
      <form id="tab2">
      
<table class="table" id="dev-table">
            <thead>
             <tr >
              <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
             
              </tr>
            </thead>
            <tbody>
            <?php echo $print3;?>
            </tbody>
          </table> 
      </form>
      </div>
      <div class="tab-pane fade" id="bajos">
      <form id="tab2">
         
<table class="table" id="dev-table">
            <thead>
             <tr >
  <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
              </tr>
            </thead>
            <tbody>
               <?php echo $print1;?>
             
            </tbody>
          </table> 
      </form>
      </div>
      <div class="tab-pane fade" id="varios">
      <form id="tab2">
         
<table class="table" id="dev-table">
            <thead>
             <tr >
           <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
           
              </tr>
            </thead>
            <tbody>
                 <?php echo $print5;?>
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
