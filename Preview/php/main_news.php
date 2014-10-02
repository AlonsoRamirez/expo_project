<?php

$db_conx=mysqli_connect('localhost','root','bol2014','beatsonlife') or die(mysqli_error($db_conx));
$sql = "SELECT COUNT(id) FROM noticias ";
$query = mysqli_query($db_conx, $sql);
$row = mysqli_fetch_row($query);
// Here we have the total row count
$rows = $row[0];
// This is the number of results we want displayed per page
$page_rows = 2;
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
$sql = "SELECT  `id`, `titulo`, `categoria`, `fecha`, `texto` FROM `noticias` ORDER BY id DESC $limit";
$query = mysqli_query($db_conx, $sql);
$textline1 = "Página <b>$pagenum</b> de <b>$last</b>";
$textpaged="Se encontraron <b>$rows</b> noticias.";
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
        
       $title = $row['titulo'];
        $cat = $row['categoria'];
        $date = $row['fecha'];
        $text = $row['texto'];
       $news .= '<hr width="450"> <span class="btn-success badge"><i class="fa fa-tags"></i> Categoría: '.$cat.'</span> <span class="btn-success badge"><i class="fa fa-calendar"></i> Publicado: '.$date.'</span> <h3><i class="fa fa-rss"></i> '.$title.'</h3>
           <br><br><p>'.$text.'</p><a class="btn btn-xs btn-contact" href="detail_new.php?id='.$row['id'].'">Más detalles</a><br>';
    }
mysqli_close($db_conx);
?>
<!--Fin de consulta para mostrar las noticias-->
<?php
include("header_no_active.php");
?>

<br>

<br>
           <div class="body-wrapper2">
            <br>
          <h3 > <i class="fa fa-folder"></i> <strong>Noticias</strong></h3>
            <br>
         
        <div class="span8">
  <p><?php echo $textline1; ?></p>
  <br>
  <p><?php echo $textpaged; ?></p>
  <?php echo $news; ?>
   <center> <ul class="pager"><?php echo $paginationCtrls; ?></ul></center>

      </div>
             
<br>
             </div>
             
           


<?php
include("header_footer_home.php");
?>