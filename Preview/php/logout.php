<?php
session_start();
session_destroy();
echo 'Ha terminado de forma satisfactoria su ses&oacute;n';
?>
<script>
location.href = "loginadmin.php";
</script>