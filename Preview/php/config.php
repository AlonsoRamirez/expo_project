<?php
define('DB_SERVER','localhost'); 
define('DB_NAME','beatsonlife'); 
define('DB_USER','root'); 
define('DB_PASS','bol2014'); 
$con=@mysql_connect('DB_SERVER','DB_USER','DB_PASS') or die(@mysql_error($con));
@mysql_select_db('DB_NAME',$con);
?>