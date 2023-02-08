<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/newUser.css">
    <title>Document</title>
</head>
<body>
<div class="login-box">
    <form action="proceso_newUser.php" method="POST">
        <div class="user-box">
            <input required="" name="name" type="text">
            <label>Nombre</label>
        </div>
        <div class="user-box">
            <input required="" name="lastname" type="text">
            <label>Apellidos</label>
        </div>
        <div class="user-box">
            <input required="" name="email" type="email">
            <label>Gmail</label>
        </div>
        <div class="user-box">
            <input required="" name="number" type="number">
            <label>Nivel de acceso</label>
        </div>
        <div class="user-box">
            <input required="" name="pass" type="text">
            <label>Contraseña</label>
        </div><center>
            <button class="btn" type="submit">
            AGREGAR
            </button>
        </center>
    </form>

</div>
</body>
</html>