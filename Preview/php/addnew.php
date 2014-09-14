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
                    <li><a href="consulta.php"><i class="fa fa-list-ol"></i> Consultar Productos</a></li>
                    <li class="selected"><a href="addnew.php"><i class="fa fa-picture-o"></i> Slider dinámico</a></li>
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
                     <center><h1>AGREGAR NUEVA IMAGEN</h1></center>
                      <center><h3 class="panel-title">Ingreso de imagen a slider dinámico (resolución de 800 x 300 píxeles)</h3></center>
                    <center><hr width="600"></center>
                         
      
<div class="panel-heading">
           
            <script type="text/javascript" src="../js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="../js/jquery.form.js"></script>
<script>
        $(document).ready(function() { /*Función para mostrar la barra de progreso al subir una foto*/
        //elements
        var progressbox     = $('#progressbox');
        var progressbar     = $('#progressbar');
        var statustxt       = $('#statustxt');
        var submitbutton    = $("#SubmitButton");
        var myform          = $("#UploadForm");
        var output          = $("#output");
        var completed       = '0%';
                $(myform).ajaxForm({
                    beforeSend: function() { //Antes de enviar
                        submitbutton.attr('disabled', ''); // disable upload button
                        statustxt.empty();
                        progressbox.slideDown(); //show progressbar
                        progressbar.width(completed); //initial value 0% of progressbar
                        statustxt.html(completed); //set status text
                        statustxt.css('color','#000'); //initial color of status text
                    },
                    uploadProgress: function(event, position, total, percentComplete) { //on progress
                        progressbar.width(percentComplete + '%') //update progressbar percent complete
                        statustxt.html(percentComplete + '%'); //update status text
                        if(percentComplete>50)
                            {
                                statustxt.css('color','#fff'); //change status text to white after 50%
                            }
                        },
                    complete: function(response) { // on complete
                        output.html(response.responseText); //update element with received data
                        myform.resetForm();  // reset form
                        submitbutton.removeAttr('disabled'); //enable submit button
                        progressbox.slideUp(); // hide progressbar
                    }
            });
        });

    </script>
<style>
#progressbox {
border: 1px solid #0099CC;
padding: 1px; 
position:relative;
width:400px;
border-radius: 3px;
margin: 10px;
display:none;
text-align:left;
}
#progressbar {
height:20px;
border-radius: 3px;
background-color: #003333;
width:1%;
}
#statustxt {
top:3px;
left:50%;
position:absolute;
display:inline-block;
color: #000000;
}
</style>

<form action="procesosubir.php" method="post" enctype="multipart/form-data" id="UploadForm">
<center><table width="500" border="0">
  <center><i class="fa fa-upload fa-2x"></i></center>
<br>
  <tr>
     <td><h6>Imagen a seleccionar:</h6></td>

   <center> <td><input name="ImageFile" type="file" /></td></center>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table></center>
<br>
<td><center><input class="btn btn-lg btn-info" type="submit"  id="SubmitButton" value="Subir imagen" /></center></td>
</form>
<center><div id="progressbox"><div id="progressbar"></div ><div id="statustxt">0%</div ></div></center>
<div id="output"></div>
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
