<?php
    include("conexion_BD.php");
    
    $name = $_POST["name"];
    $lastName = $_POST["lastname"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $num = $_POST["number"];

    $query = "INSERT INTO usuarios(nombre,apellidos,email,pass,cate_usu) VALUES ('$name','$lastName','$email','$pass','$num')";
    
    $respuesta=mysqli_query($conexion,$query);

    if ($respuesta){
        header("Location:control_users.php");
    } else{
        echo "ALGO SALIO MAL!";
    }
    ?>