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
        <a href="newUser.php"><button class="btn">Añadir Usuario</button></a>
        <div class="login-box modal">
            <form>
                <div class="user-box">
                <input required="" name="" type="text">
                <label>Username</label>
                </div>
                <div class="user-box">
                <input required="" name="" type="password">
                <label>Password</label>
                </div><center>
                <a href="#">
                    SEND
                <span></span>
                </a></center>
            </form>
            </div>
        <div class="container-table">
        <?php
            $user = "root";
            $pass = "";
            $host = "localhost";
            $connection = mysqli_connect($host, $user, $pass);
            $datab = "jmaAdm";
            $db = mysqli_select_db($connection,$datab);
            $consulta = "SELECT * FROM usuarios";
            $result = mysqli_query($connection,$consulta);
            if(!$result) 
            {
                echo "No se ha podido realizar la consulta";
            }
            echo "<table>";
            echo "<tr>";
            echo "<th>Codigo</th>";
            echo "<th>Nombre</th>";
            echo "<th>Apellido</th>";
            echo "<th>Telefono</th>";
            echo "<th>Cargo</th>";
            echo "<th>Correo</th>";
            echo "<th>Opciones</th>";
            echo "</tr>";
            while ($row = mysqli_fetch_array($result))
            {?>
                <?php echo "<tr>";
                echo "<td>" . $row['idUsuario']. "</td>";
                echo "<td>" . $row['nombre']. "</td>";
                echo "<td>" . $row['apellidos'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['cate_usu'] . "</td>";
                ?>
                <td>
                    <a class="bx bxs-edit"
                    href=Eliminar.php?id=<?php echo $row['idUsuario'];?>></a>
                    <a class="bx bx-x"
                    href=Eliminar.php?id=<?php echo $row['idUsuario'];?>></a>
                </td>";
                <?php echo "</tr>";
            }
            echo "</table>";
            mysqli_free_result($result)
            ?>
        </div>
    </div>
</body>
</html>