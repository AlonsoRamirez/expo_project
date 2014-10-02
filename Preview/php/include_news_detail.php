<?php




//Noticias
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
    $query  = "SELECT  `id`, `titulo`, `categoria`, `fecha`, `texto_completo` FROM `noticias` WHERE `id`='".$id."'";
    $res    = mysqli_query($link,$query);
    $count  =   mysqli_num_rows($res);
     while($row=mysqli_fetch_array($res))
    {
        
        $title = $row['titulo'];
        $cat = $row['categoria'];
        $date = $row['fecha'];
        $noticia = $row['texto_completo'];
    }


 $link = mysqli_connect('localhost','root','bol2014','beatsonlife') or die(mysqli_error($link));
    $query  = "SELECT  `id`, `nombre`, `email`, `comentario`, `hora`, `noticia_id` FROM `comentarios` WHERE `noticia_id` =".$id."";
    $res    = mysqli_query($link,$query);
    $count  =   mysqli_num_rows($res);
    $comment="";
     while($row=mysqli_fetch_array($res))
    {
        
        $nombre = $row['nombre'];
        $email = $row['email'];
        $comentario = $row['comentario'];
        $hora = $row['hora'];
        $comment.="
              <div class='comment-block'>

             <div class='comment-item'>
               <hr width='1000'>
      
        <div id='comment-post'>
          <h3>".$nombre." (".$email.") <span class='btn-success badge'><i class='fa fa-calendar'></i> Publicado: ".$hora." </span></h3>
          <p>".$comentario." </p>
        </div>
 <img class='comment-avatar' src='../img/gravatar.jpg' alt='avatar'>
       
          
        
      </div>
     
  </div>";

}
    
?>
