<!DOCTYPE html>

<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<title>Beats on Life | Registro de Usuarios</title>
 

<script src="../register/jquery.js"></script>
   <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
<link href="../register/animate.css" rel="stylesheet" type="text/css">
<script src="../register/jquery-ultimate-fancy-form.min.js"></script>
<link href="../register/jquery-ultimate-fancy-form.css" rel="stylesheet" type="text/css">
<link href="../register/bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="../register/bootstrap.min.js"></script>
<script src="../register/bootstrap.js"></script>
<link href="../register/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../register/custom.css" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="../css/cmendez1.css">
  <link rel="stylesheet" href="../css/font-awesome.css">
  

       <!--Scripts utilizados para el colapso del menú y revisar las características de JS y CSS3-->


    
   <!--Script por default-->

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