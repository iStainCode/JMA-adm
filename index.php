<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,600,0,0" />
    <title>JMA login</title>
</head>

<body>

    <div class="login-card-container">
        <div class="login-card">
            <div class="login-card-logo">
                <img src="svg/logo.svg" alt="logo">
            </div>
            <div class="login-card-header">
                <h1>Inicio de sesion</h1>
                <div>porfavor registrate en la plataforma</div>
            </div>
            <?php
            include ("conexion_BD.php");
            include ("controlador-login.php");
            ?>
            <form class="login-card-form" method="post">
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">Email</span>
                    <input type="email" placeholder="Correo" id="emailForm" autofocus required name="txtCorreo">
                </div>
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">Password</span>
                    <input type="password" placeholder="Contraseña" id="passwordForm"required name="txtContra">
                </div>
                <div class="form-item-other">
                    <div class="checkbox">
                        <input type="checkbox" id="rememberMeCheckbox" checked>
                        <label for="rememberMeCheckbox">Recordarme</label>
                    </div>
                    <a href="#">Perdi mi contraseña</a>
                </div>
                <button type="submit" name="btnEntrar">Entrar</button>
            </form>
            <div class="login-card-footer">
                No tienes una cuenta?  <a href="#"> Trabaja en nuestra empresa y ten una</a>
            </div>
        </div>
    </div>

</body>

</html>