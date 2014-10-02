
<?php
include 'include_news_detail.php'; 
?>

<?php
include("header_no_active.php");
?>

<br>

<br>
           <div class="body-wrapper2">
           
           
             <p><span class="btn-success badge"><i class="fa fa-tags"></i> Categoría: <?php echo $cat;?></span>   <span class="btn-success badge"><i class="fa fa-calendar"></i> Publicado: <?php echo $date;?> </span></p>
          <h1><i class="fa fa-rss"></i> <strong><?php echo $title;?></strong></h1>
   
          <br><p><?php echo $noticia;?></p>

       <hr width="1000">


<script src="../js/validation.js"></script>

          <form id="form" class="form-horizontal" method="post" action="addcomment.php"><br>
             <h3>  <i class="fa fa-comments"></i> Ingrese su comentario</h3>
          <input type="hidden" name="postid" value="<?php echo $id?>">
              <div class="form-group">      
    <p> <h4 class="col-lg-1 control-label">Nombre </h4></p>
        <div class="col-lg-4">
        <input type="text" class="form-control" name="nombre" id="nombre" required="required" placeholder="Tu nombre" onkeydown="return disableEnterKey(event)"/>
        </div>
   </div>
 

    <div class="form-group"> 
       <p> <h4 class="col-lg-1 control-label">Email</h4></p>
        <div class="col-lg-4">
<input type="email" class="form-control"  name="email" id="email" required="required" placeholder="Tu email" onkeydown="return disableEnterKey(event)"/>
        </div>
      </div>



    <div class="form-group">    
        <h4 class="col-lg-1 control-label">Mensaje</h4>
        <div class="col-lg-4">
          <textarea name="data" cols="40" rows="5" id="data" class="form-control" required="required" placeholder="Tu mensaje" onkeydown="return disableEnterKey(event)"></textarea>
        </div>

      </div>

      <input type="hidden"  name="new_id" id="new_id" value="<?php echo $id;?>" onkeydown="return disableEnterKey(event)"/>

    
<br>
 <input class="btn btn-lg btn-primary" id="new"  type="submit" id="submit" value="Terminar" name="submit" width="100" />
  <br>
<br>
 
</form>


<div class="well"><h3>  <i class="fa fa-comments"></i> Comentarios</h3></div>

             <?php echo $comment; ?>
             </div>
             


<?php
include("header_footer_home.php");
?>