<?php
$connection = mysqli_connect('localhost','root','bol2014','beatsonlife') or die(mysqli_error($connection));
$query  = "SELECT `id`, `titulo`, `categoria`, `fecha`, `texto` FROM `noticias` order by id desc limit 3";
$res    = mysqli_query($connection,$query);
$count  =   mysqli_num_rows($res);
$news='';
$counter=0;

 while($row=mysqli_fetch_array($res))
    {
        
        $title = $row['titulo'];
        $cat = $row['categoria'];
        $date = $row['fecha'];
        $text = $row['texto'];
        if($counter == 0)
           {
            $news .= '<hr width="450"> <span class="btn-success badge"><i class="fa fa-tags"></i> Categoría: '.$cat.'</span> <span class="btn-success badge"><i class="fa fa-calendar"></i> Publicado: '.$date.'</span> <h3><i class="fa fa-rss"></i> '.$title.'</h3>
           <br><br><p>'.$text.'</p><a class="btn btn-xs btn-contact" href="detail_new.php?id='.$row['id'].'">Más detalles</a><br>';
        }
        else
      {
            $news .= '<hr width="450"> <span class="btn-success badge"><i class="fa fa-tags"></i> Categoría: '.$cat.'</span> <span class="btn-success badge"><i class="fa fa-calendar"></i> Publicado: '.$date.'</span> <h3><i class="fa fa-rss"></i> '.$title.'</h3> 
            <br><br> <p>'.$text.'</p><a class="btn btn-xs btn-contact" href="detail_new.php?id='.$row['id'].'">Más detalles</a><br>';
      }
        $counter++;
    }
 

?>