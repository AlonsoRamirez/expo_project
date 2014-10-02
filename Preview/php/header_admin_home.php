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
       <!--Apariencia Bootstrap-->
     <script src="../js/prefixfree-1.0.7.js" type="text/javascript"></script>
     <script src="../js/modernizr.js"></script>
       <!--Scripts utilizados para el colapso del menú y revisar las características de JS y CSS3-->
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../js/bootstrap.js"></script>
      <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: 'es'}
</script>





     <script >
$(document).ready(function(){
	$("#accordian h3").click(function(){
		$("#accordian ul ul").slideUp();
		if(!$(this).next().is(":visible"))
		{
			$(this).next().slideDown();
		}
	})
})

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
                   <li class="active"><a href="home.php"><i class="fa fa-home"></i>Home</a>
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
  <input class="form-control" type="text" placeholder="Buscar"  onkeyup="showResult(this.value)">
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
        <li><a href="shopping_cart.php">Estado de compra</a></li>
        <li><a href="order.php">Adquisición</a></li>
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
