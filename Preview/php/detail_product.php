<?php
$id = null;
    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
    }
    if($id == null)
    {
        header("Location: home.php");
    } 

    $link = mysqli_connect('localhost','root','bol2014','beatsonlife') or die(mysqli_error($link));
    $query  = "SELECT `codigo_pr`,`categoria_pr`,`nombre_pr`,`descripcion_pr`,`precio_pr`,`imagen_pr` FROM `producto`  WHERE `codigo_pr`='".$id."'";
    $res    = mysqli_query($link,$query);
    $count  =   mysqli_num_rows($res);
     while($row=mysqli_fetch_array($res))
    {
        
        $codigo = $row['codigo_pr'];
        $nombre = $row['nombre_pr'];
        $descripcion = $row['descripcion_pr'];
        $precio = $row['precio_pr'];
        $image = $row['imagen_pr'];
        $categoria = $row['categoria_pr'];
    }
?>


  <!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  
  <meta name="google-translate-customization" content="c23c45077a426555-c3cb83197ae3780d-g4fd4c5878f4ef239-13"></meta>
      <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
  <title>Beats on Life | Home</title>
   <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="../css/estilos.css">
  <link rel="stylesheet" href="../css/font-awesome.css">
   <link href="../css/bootstrap.css" rel="stylesheet">
     <script src="../js/prefixfree-1.0.7.js" type="text/javascript"></script>
     <script src="../js/modernizr.js"></script>
    <script src="../js/bootstrap.js"></script>
      <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
<script type="text/javascript" src="../lib/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="../lib/jquery.mousewheel-3.0.6.pack.js"></script>
  <script type="text/javascript" src="../source/jquery.fancybox.js"></script>
  <link rel="stylesheet" type="text/css" href="../source/jquery.fancybox.css" media="screen" />s
  <style type="text/css">

.fancybox-custom .fancybox-skin {
      box-shadow: 0 0 50px #222;
    }
</style>

  
     <script >
     /*jQuery time*/
$(document).ready(function(){
  $("#accordian h3").click(function(){
    //slide up all the link lists
    $("#accordian ul ul").slideUp();
    //slide down the link list below the h3 clicked - only if its closed
    if(!$(this).next().is(":visible"))
    {
      $(this).next().slideDown();
    }
  })
})

     </script>

      <script type="text/javascript">
    $(document).ready(function() {
      /*
       *  Simple image gallery. Uses default settings
       */

      $('.fancybox').fancybox();

      /*
       *  Different effects
       */

    

      // Set custom style, close if clicked, change title type and overlay color
      $(".fancybox-effects-c").fancybox({ //Efecto a utilizar
        wrapCSS    : 'fancybox-custom',
        closeClick : true,

        openEffect : 'none',

        helpers : {
          title : {
            type : 'inside'
          },
          overlay : {
            css : {
              'background' : 'rgba(238,238,238,0.85)'
            }
          }
        }
      });
    });
  </script>

   
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".bs-navbar-collapse">
            <span class="sr-only">navegacion</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
          <a class="navbar-brand" >Beats on Life</a>
          
            
          


        </div>


    <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse bs-navbar-collapse">
         
            <ul class="nav navbar-nav ">
                   <li ><a href="home.php"><i class="fa fa-home"></i>Home</a>
                        </li>
                        <li ><a href="inventario.php"><i class="fa fa-th-large"></i> Inventario</a>
                        </li>
                        <li ><a href="about.php"><i class="fa fa-user"></i> Acerca De</a>
                        </li>

                        <li><a href="ayuda.php"><i class="fa fa-question-circle"></i> Ayuda</a>
                        </li>
                        
                   
          
                 
                  
                </ul>

            
             <div class="input-group margin-bottom-sm">
  <span class="input-group-addon"><i class="fa fa-search"></i></span>
  <input class="form-control" type="text" placeholder="Buscar" onkeyup="showResult(this.value)">
 
</div>
      
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
       <div id="livesearch"></div>

    </nav>

<script>
      function showResult(str) { //Función para LIVESEARCH y conexión con el documento XML contenido en livesearch.php
  if (str.length==0) {  //Si no hay nada, no se muestra algo y retorna un valor nulo
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) { //Hace solicitud HTTP para XML
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {  //Cuando el XML esté listo, da la respuesta y se abre el parámetro GET para la conexión.
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true); 
  xmlhttp.send();
}
</script>
  


  <div id="sidebar">

    <a href="#" id="icono"><i class="fa fa-bars"></i></a>
         
  
      <a href="#"><img id="logi2" src="../img/logo2.jpg" width="82" height="82"></a>
    
    <!-- Menu del sidebar -->
     <div id="accordian">
  <ul>
    
  

    <li>
      <h3>Compra <i class="fa fa-shopping-cart"></i></h3>
      <ul>
        <li><a href="#">Adquisición</a></li>
        <li><a href="#">Estado de compra</a></li>
        <br>
      
      </ul>
    </li>
    <li>
      <h3>Registro <i class="fa fa-users"></i></h3>
      <ul>
        <li><a href="loginadmin.php">Log In</a></li>
        <li><a href="register.php">Nuevo Usuario</a></li>
        <br>
      
      </ul>
    </li>
    <li>
      <h3>Noticias <i class="fa fa-book"></i></h3>
      <ul>
        <li><a href="main_news.php">Noticias </a></li>
        <br>

      
      </ul>   
    </li>
    <li>
      <h3>Servicios <i class="fa fa-suitcase"></i></h3>
      <ul>
        <li><a href="historia.php">Historia musical</a></li>
        <li><a href="afinacion.php">Afinación de instrumentos</a></li>
        <br>

      
      </ul>   
    </li>
    
  </ul>
</div>

</div>
 

<br>

<br>

 

   
           <div class="body-wrapper2">
           
           
             <p><span class="btn-success badge"><i class="fa fa-tags"></i> Categoría: <?php echo $categoria;?>  </span></p>
        
            <center> <h1><?php echo $nombre;?></h1></center>
            <center><hr width="1000"></center>
            <center>
                <p>
    

    <a class="fancybox-effects-c" href="../img/<?php echo $image; ?>" ><img width="240" height="240"src="../img/<?php echo $image; ?>" alt="" /></a>

  </p>

               
                
              </center>
              <br>
            <center><div class="well">
            <p>Descripción: <small><?php echo $descripcion;?></small></p>
            <p>Precio: <small> $ <?php echo $precio;?></small></p>
            </div></center>
           <center> <button class="btn btn-lg btn-default"><a href="loginuser.php"> <i class="fa fa-shopping-cart"></i> Agregar al carrito</a> </button></center>
         


</div>
         
             


<?php
include("header_footer_home.php");
?>