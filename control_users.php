<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JMA usuarios</title>
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/control-users.css">
    <!-- CUSTOM JS -->
    <script src="./js/app.js" defer></script>
</head>
<body>
    <div class="menu-dashboard">
        <!-- TOP MENU -->
        <div class="top-menu">
            <div class="logo">
                <span>JMA</span>
            </div>
            <div class="toggle">
                <i class='bx bx-menu'></i>
            </div>
        </div>
        <!--  SEARCH -->
        <div class="input-search">
            <i class='bx bx-search'></i>
            <input type="text" class="input" placeholder="Buscar">
        </div>
        <!-- MENU -->
        <div class="menu">
            <div class="enlace">
                <i class="bx bx-grid-alt"></i>
                <a href="" class="link__menu">Dashboard</a>
            </div>

            <div class="enlace">
                <i class="bx bx-user"></i>
                <a href="control_users.php" class="link__menu">Usuarios</a>
            </div>

            <div class="enlace">
                <i class="bx bx-grid-alt"></i>
                <a href="" class="link__menu">Analiticas</a>
            </div>

            <div class="enlace">
                <i class="bx bx-message-square"></i>
                <a href="" class="link__menu">Mensajes</a>
            </div>

            <div class="enlace">
                <i class="bx bx-file-blank"></i>
                <a href="Reclamos.php" class="link__menu">Reclamos</a>
            </div>

            <div class="enlace">
                <i class="bx bx-cart"></i>
                <a href="" class="link__menu">Pedidos</a>
            </div>

            <div class="enlace">
                <i class="bx bx-cog"></i>
                <a href="" class="link__menu">Configuración</a>
            </div>
        </div>
    </div>
    <div class="container-usu">
        <button class="btn">Añadir Usuario</button>
    </div>

</body>
</html>