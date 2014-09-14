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
       echo '<form method="post" action="addimage.php">
    <table width="100%" border="0" cellpadding="4" cellspacing="0">
    <tr>
    <td align="center"><img src="../img/'.$NewImageName.'"><input type="hidden" value="'.$NewImageName.'" name="image" /></td>
    </tr>
    <tr>
    <td align="center"><h4>T&iacute;tulo:</h4><br><input type="text" name="title" /><br></td>

    </tr>
    <br>
    <tr>
    <br>

    <td align="center"><br><input class="btn btn-lg btn-danger" type="submit" name="submit" value="Guardar" /></td>
    </tr>
    </table></form>';
 
}
 
?>