<?php
    // nombres de la base de datos de peña :  bdjma
    $conexion = mysqli_connect("localhost","root","");
    $conexion -> set_charset("utf8");
    $bd = mysqli_select_db($conexion,"jmaadm");
?>