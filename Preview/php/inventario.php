
<?php

$db_conx=mysqli_connect('localhost','root','bol2014','beatsonlife') or die(mysqli_error($db_conx));
$sql = "SELECT COUNT(codigo_pr) FROM producto ";
$query = mysqli_query($db_conx, $sql);
$row = mysqli_fetch_row($query);
// Here we have the total row count
$rows = $row[0];
// This is the number of results we want displayed per page
$page_rows = 6;
// This tells us the page number of our last page
$last = ceil($rows/$page_rows);
// This makes sure $last cannot be less than 1
if($last < 1){
  $last = 1;
}
// Establece la variable de página
$pagenum = 1;
// Get pagenum from URL vars if it is present, else it is = 1
if(isset($_GET['pn'])){
  $pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
}
// This makes sure the page number isn't below 1, or more than our $last page
if ($pagenum < 1) { 
    $pagenum = 1; 
} else if ($pagenum > $last) { 
    $pagenum = $last; 
}
$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
$sql = "SELECT  `codigo_pr`, `nombre_pr`,`imagen_pr` FROM `producto` ORDER BY codigo_pr DESC $limit";
$query = mysqli_query($db_conx, $sql);
$paginationCtrls = '';
if($last != 1){
  if ($pagenum > 1) {
        $previous = $pagenum - 1;
    $paginationCtrls .= '<li class="previous"><a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'"> &laquo; Anterior</a></li> ';
    // Render clickable number links that should appear on the left of the target page number
    for($i = $pagenum-4; $i < $pagenum; $i++){
      if($i > 0){
            //$paginationCtrls .= '<li><a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a></li>&nbsp;';
      }
      }
    }
  // Render the target page number, but without it being a link
  
  // Render clickable number links that should appear on the right of the target page number
  for($i = $pagenum+1; $i <= $last; $i++){
    //$paginationCtrls .= '<li><a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a></li>  ';
    if($i >= $pagenum+4){
      break;
    }
  }
  // This does the same as above, only checking if we are on the last page, and then generating the "Next"
    if ($pagenum != $last) {
        $next = $pagenum + 1;
        $paginationCtrls .= '  <li class="next"><a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'">Siguiente &raquo;</a></li> ';
    }
}
$news = '';
 while($row=mysqli_fetch_array($query))
    {
        
       $image = $row['imagen_pr'];
        $nombre = $row['nombre_pr'];
       $news .= ' <li>
                 <img src="../img/'.$image.'">
                 <br>
                 <hr>
                  <center> <h3>'.$nombre.'</h3></center>
                  <center><a class="btn btn-lg btn-primary" href="detail_product.php?id='.$row['codigo_pr'].'"><i class="fa fa-list"></i> Más detalles</a></center>
                  <hr>
                  <br>
                
               </li>';
    }
mysqli_close($db_conx);
?>

<?php
include("header_admin_inventario.php");
?>

<br>

<br>
           <div class="body-wrapper2">
            <br>
            <hr>
             <center><i class="fa fa-folder"></i></center>
          <h3 class="ab-2"> <STRONG>INVENTARIO</strong></h3>

          
            <hr>
      
             <div id="invent">

          <?php echo $news; ?>

             </div>
         <center> <ul class="pager"><?php echo $paginationCtrls; ?></ul></center>

         </div>



<?php
include("header_footer_home.php");
?>