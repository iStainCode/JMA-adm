<?php
// Iniciar la sesión
session_start();

// Verificar si se ha enviado el formulario de inicio de sesión
if (isset($_POST["txtCorreo"]) && isset($_POST["txtContra"])) {
    // Escapar los valores del formulario
    $email = $conexion->real_escape_string($_POST["txtCorreo"]);
    $password = $conexion->real_escape_string($_POST["txtContra"]);

    // Consultar la base de datos para verificar si el usuario existe
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conexion->query($query);

    // Verificar si el usuario existe en la base de datos
    if ($result->num_rows > 0) {
        // El usuario existe, iniciar una sesión
        header("Location: principal.php");
        exit();
    } else {
        // El usuario no existe, mostrar un mensaje de error
        echo "El nombre de usuario o la contraseña son incorrectos";
    }
}
?>