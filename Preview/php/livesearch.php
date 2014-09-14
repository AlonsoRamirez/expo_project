<?php
$xmlDoc=new DOMDocument(); //Se crea un documento DOM (Document Object Model)
$xmlDoc->load("../xml/links.xml");

$x=$xmlDoc->getElementsByTagName('link');

//Adquiere el parámetro q de la URL
$q=$_GET["q"];

//Busca los links del archivo xml si la longitud es mayor a 0 del parámetro 1
if (strlen($q)>0) {
  $hint="";
  for($i=0; $i<($x->length); $i++) {
    $y=$x->item($i)->getElementsByTagName('title');
    $z=$x->item($i)->getElementsByTagName('url');
    if ($y->item(0)->nodeType==1) {
      //Encuentra un link que tenga coincidencia con la búsqueda
      if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q)) {
        if ($hint=="") {
          $hint="<a href='" . $z->item(0)->childNodes->item(0)->nodeValue .  "' >" . $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
          //Juega con los valores de cada nodo en el nodo raíz y los hijos que contiene cada uno para encontrar el valor
        } else {
          $hint=$hint . "<br /><a href='" . 
          $z->item(0)->childNodes->item(0)->nodeValue .  "' >" .  $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
        }
      }
    }
  }
}

// Si no hay nada, coloca que no hay sugerencias
if ($hint=="") {
  $response="No hay sugerencias";
} else {
  $response=$hint;
}

//Coloca la respuesta
echo $response;
?>