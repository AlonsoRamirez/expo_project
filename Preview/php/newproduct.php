<?php
ini_set("display_errors",1);
if(isset($_POST))
{
    $Destination = '../img';
    if(!isset($_FILES['ImageFile']) || !is_uploaded_file($_FILES['ImageFile']['tmp_name']))
    {
        die('Algo salió mal con el archivo');
    }
    $allowedExts = array("jpg", "jpeg", "gif", "png");
 
    $RandomNum   = rand(0, 9999999999);
 
    $ImageName      = str_replace(' ','-',strtolower($_FILES['ImageFile']['name']));
    $ImageType      = $_FILES['ImageFile']['type']; //"image/png", image/jpeg etc.
 
    $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
    $ImageExt = str_replace('.','',$ImageExt);
    if(!in_array($ImageExt, $allowedExts))
    {
        die('Invalid file format only <b>"jpg", "jpeg", "gif", "png"</b> allowed.');
    }
    $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
 
    //Create new image name (with random number added).
    $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
 
    move_uploaded_file($_FILES['ImageFile']['tmp_name'], "$Destination/$NewImageName");
       echo '<form method="post" action="saveproduct.php">
    <table width="100%" border="0" cellpadding="4" cellspacing="0">
    <tr>
    <td align="center"><img src="../img/'.$NewImageName.'"><input type="hidden" value="'.$NewImageName.'" name="image" /></td>
    </tr>
    <tr>
    <br>
       <h4 align="center">Nombre de producto:</h4><br><center><input class="form-control" type="text" name="nombre" size="50" required="required"/></center><br>
        <br>
        <h4 align="center">Categoría:</h4><br><center><select name="encabezado" id="encabezado" class="form-control">
         <option value="Cuerda">Cuerda</option>
         <option value="Viento-metal">Viento-metal</option>
         <option value="Viento-madera">Viento-madera</option>
         <option value="Percusion">Percusión</option>
         <option value="Teclado">Teclado</option>
         <option value="Varios">Varios</option>
       </select></center><br>
        <h4 align="center">Descripción de producto:</h4><br><center><textarea class="form-control" name="descripcion" cols="40" rows="2" id="text" required="required" onkeydown="return disableEnterKey(event)"></textarea></center><br>
         <h4 align="center">Precio unitario:</h4><br><center><input class="form-control" type="text" name="precio" required="required" onkeypress="return isNumberKey(event)"  onkeydown="return disableEnterKey(event)"/></center><br>

      


            
     

    </tr>
    <br>
    <tr>
    <br>

    <td align="center"><br><input class="btn btn-lg btn-success" type="submit" name="submit" value="Guardar" /></td>
    </tr>
    </table></form>';
 
}
 
?>

  