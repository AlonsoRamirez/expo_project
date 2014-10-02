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