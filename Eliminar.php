<?php
            $user = "root";
            $pass = "";
            $host = "localhost";
            $connection = mysqli_connect($host, $user, $pass);
            $datab = "jmaadm";
            $db = mysqli_select_db($connection,$datab);
            $id=$_GET["id"];
            $eliminar= "DELETE FROM reclamos WHERE idReclamo=$id";
            $resultado=mysqli_query($connection,$eliminar);
            if ($resultado){
                header("Location:Reclamos.php");
            } else{
                echo "<scrip>alert(No se pudo Eliminar); window.history.go(-1);</script>";
            }
?>