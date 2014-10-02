<?php
require('fpdf/WriteHTML.php');
$connection = mysqli_connect('localhost','root','bol2014','beatsonlife') or die(mysqli_error($connection));
$query  = "SELECT `compra_id`, `nombre_usuario`, `fecha`, `total` FROM `compra`";
$res    = mysqli_query($connection,$query);
$count  =   mysqli_num_rows($res);
$print='';
$pdf=new PDF_HTML();
$pdf->SetMargins(30, 25 , 30); 
$pdf->AliasNbPages();
$pdf->SetAutoPageBreak(true, 15);
$pdf->AddPage();
$pdf->Image('../img/logo.png',88,13,33);
$pdf->SetFont('Arial','B',14);
$pdf->WriteHTML('<br><br><p align="center">Beats On Life</p><br><p align="center">--- Reporte de Compra ---</p><hr><br>');

$pdf->Ln();
$pdf->SetTextColor(40, 174, 44, 0.9);
$pdf->SetFillColor(224,235,255);
  $pdf->SetFont('Arial','B',12);
  $pdf->Cell(15,10,'ID',1,0,'C');
  $pdf->Cell(52,10,'Nombre',1,0,'C');
  $pdf->Cell(67,10,'Fecha',1,0,'C');
  $pdf->Cell(17,10,'Total($)',1,0,'C');
  $pdf->WriteHTML2('<br>');
 while($registro=mysqli_fetch_array($res))
    {
    
    $pdf->Cell(15,12,$registro[0],1,0,'C');
    $pdf->Cell(52,12,$registro[1],1,0,'C');
    $pdf->Cell(67,12,$registro[2],1,0,'C');
    $pdf->Cell(17,12,$registro[3],1,0,'C');
     
    }
    $pdf->Output(); 
    mysql_close();

?>


 
        
