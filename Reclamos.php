<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JMA Dashboard</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/style2.css">
    <script src="./js/app.js" defer></script>   
</head>
<body>
    <div>
    <aside>
    <div class="menu-dashboard">
        <div class="top-menu">
            <div class="logo">
                <img src="./img/logo.png" alt="">
            </div>
            <div class="toggle">
                <i class='bx bx-menu'></i>
            </div>
        </div>
        <div class="input-search">
            <i class='bx bx-search'></i>
            <input type="text" class="input" placeholder="Buscar">
        </div>
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
                <a href="Productos.php" class="link__menu">Configuración</a>
            </div>
        </div>
    </div>
    </aside>
    <section>
    <div>
            <?php
            $user = "root";
            $pass = "";
            $host = "localhost";
            $connection = mysqli_connect($host, $user, $pass);
            $datab = "jmaAdm";
            $db = mysqli_select_db($connection,$datab);
            $consulta = "SELECT * FROM Reclamos";
            $result = mysqli_query($connection,$consulta);
            if(!$result) 
            {
                echo "No se ha podido realizar la consulta";
            }
            echo "<table>";
            echo "<tr>";
            echo "<th><h1>Numero</th></h1>";
            echo "<th><h1>Usuario</th></h1>";
            echo "<th><h1>Detalles</th></h1>";
            echo "<th><h1>Opciones</th></h1>";
            echo "</tr>";
            
            while ($row = mysqli_fetch_array($result))
            {?>
                <?php echo "<tr>";
                echo "<td><h2>" . $row['idReclamo']. "</td></h2>";
                echo "<td><h2>" . $row['id_usuario']. "</td></h2>";
                echo "<td><h2>" . $row['Contenido'] . "</td></h2>";?>
                <td><a class="Delete" href=Eliminar.php?id=<?php echo $row['idReclamo'];?>>Concluir</a></td>";
                <?php echo "</tr>";
            }
            echo "</table>";
            mysqli_free_result($result)
            ?>
    </div>
    </section>
    </div>
</body>
</html>