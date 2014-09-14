<?php
$connection = mysqli_connect('localhost','root','bol2014','beatsonlife') or die(mysqli_error($connection));
$query  = "SELECT * FROM `images` order by id_image desc limit 6";
$res    = mysqli_query($connection,$query);
$count  =   mysqli_num_rows($res);
$slides='';
$Indicators='';
$counter=0;

 while($row=mysqli_fetch_array($res))
    {
 
        $title = $row['titulo'];
        $image = $row['imagen'];
        if($counter == 0)
           {
            $Indicators .='<li data-target="#carousel-example-generic" data-slide-to="'.$counter.'" class="active"></li>';
            $slides .= '<div class="item active">
            <img src="../img/'.$image.'" alt="'.$title.'" />
            <div class="carousel-caption">
              <h3>'.$title.'</h3>    
            </div>
          </div>';
 
        }
        else
        {
            $Indicators .='<li data-target="#carousel-example-generic" data-slide-to="'.$counter.'"></li>';
            $slides .= '<div class="item">
            <img src="../img/'.$image.'" alt="'.$title.'" />
            <div class="carousel-caption">
              <h3>'.$title.'</h3>      
            </div>
          </div>';
        }
        $counter++;
    }
 

?>


<?php
include("header_admin_home.php");
?>

              <div class="body-wrapper">
              <div id="slider-wrapper">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                 <?php echo $Indicators; ?>
                            </ol>
                        <div class="carousel-inner">
                                 <?php echo $slides; ?>  

                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>
                                <span class="fa fa-chevron-circle-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>
                                <span class="fa fa-chevron-circle-right"></span>
                            </a>
                        </div>
                    </div>

                </div>
               </div>
                <div class="span12" id="divMain">
                
  <h1>Bienvenidos a Beats On Life</h1>
   <p><strong>Beats on Life es un espacio dirigido hacia la compra o adquisición de instrumentos . Aqui encontrarás toda clase de instrumentos el cual podrás comprar u observar, el cual pagas y en nuestras sucursal puedes adquirir y comiences a disfrutar de tus nuevos instrumentos. Por último, te invitamos a que te unas a nuestras redes sociales y nos des tu calificación de la página. Disfruta tu estadía en Beats on Life.</p>

            
                         
         

                    <br />                   
                    <br />  
                  </div>

                 <div class="container">
      <!-- Example row of columns -->
      <div id="row">
        <div class="col-md-4">
         
           <center><i class="fa fa-thumbs-up fa-3x"></i></center>
          <center><h2> Productos</h2></center>
          <p>Observa nuestros productos, cada mes ingresan nuevos modelos puedes personalizar tus instrumentos que solicites y ver en detalle su marca y sus ventajas.</p>
         
        </div>
        <div class="col-md-4">
         
         <center><i class="fa fa-usd fa-3x"></i></center>
          <center><h2>Precios</h2></center>
          <p>Precios accesibles y cómodos para tu bolsillo, donde el usuario tenga la facibilidad de adquirir varios instrumentos sin pensar en un precio enorme.</p>
  
       </div>
        <div class="col-md-4 ">
          <center><i class="fa fa-star fa-3x"></i></center>
         <center> <h2> Fiabilidad</h2></center>
          <p>Compara precios y ve cual es mas comódo para tu bolsillo. Además, puedes constatar de la garantía y la calidad que tiene cada uno de los instrumentos.</p>
  
        </div>
      </div>
      </div>   
              <div id="news-feed">
              <h2><i class="fa fa-book"></i> Noticias</h2>
              <hr>
               <div class="span8">
    <h3><i class="fa fa-rss"></i> Asombrosa escuela musical en China</h3>
<img class="newspic" src="../img/china-school.jpg" height="150" width="300" >
    <div>
      
        <span class="btn-success badge"><i class="fa fa-calendar"></i> Posted 2012-08-02 20:47:04</span><div class="pull-right"><p><a class="btn btn-lg btn-danger" href="#" role="button">Lea más <i class="fa fa-angle-double-right"></i></a></p></div>

    </div>   
    <br>
    <hr>
    <h3><i class="fa fa-rss"></i> Concierto en pleno metro de Austria</h3>
    <img class="newspic" src="../img/austria.jpg" height="150" width="300" >

    <div>
      
        <span class="btn-success badge"><i class="fa fa-calendar"></i> Posted 2012-08-02 20:47:04</span><div class="pull-right"><p><a class="btn btn-lg btn-danger" href="#" role="button">Lea más <i class="fa fa-angle-double-right"></i></a></p></div>

    </div>   
    <br>
    <hr>
       <h3><i class="fa fa-rss"></i> ¿Tocar violín en medio del hielo?</h3>
    <img class="newspic" src="../img/ice-violin.jpg" height="150" width="300" >
    <div>
      
        <span class="btn-success badge"><i class="fa fa-calendar"></i> Posted 2012-08-02 20:47:04</span><div class="pull-right"><p><a class="btn btn-lg btn-danger" href="#" role="button">Lea más <i class="fa fa-angle-double-right"></i> </a></p></div>

    </div>   
    <br>

  
</div>
              
           </div>

    <div id="multimedia-feed">
     <h2><i class="fa fa-youtube-play"></i> Multimedia & Social</h2>
     <hr>
     <center><iframe width="300" height="200" src="http://www.youtube.com/embed/sf6LD2B_kDQ" frameborder="0" allowfullscreen></iframe></center>
    <center>   <iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FBeatsOnLife2014&amp;width&amp;height=400&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=true&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:400px;" allowTransparency="true"></iframe>     
</center>
    </div>
           </div>


<?php
include("header_footer_home.php");
?>