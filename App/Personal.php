<?php
    include_once 'conexion.php';
    $connection = conexion2();
    if (!$connection) {
        die('F');
    }
?>
<html>
    <head>
        <title>Inicio</title>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Estilos/EstiloPersonal.css">
        <link rel="stylesheet" href="../Estilos/pushbar.css">
    </head>
    <body class="cuerpos">
    <header id="Ini_header">
            <nav id="Ini_nav">
                <ul class="BarraP">
                    <li class="BarraPp"><a href="../index.php" class="Rutas">Home</a></li>
                    <li class="BarraPp"><a href="Inventario.php" class="Rutas ">Inventario</a></li>
                    <li class="BarraPp"><a href="Personal.php" class="Rutas ">Personal</a></li>
                    <<!--<li class="BarraPp"><a href="Siniestro.php" class="Rutas ">Siniestro</a></li>-->
                    <!--<li class="BarraPp"><a href="Gastos.php" class="Rutas ">Gastos</a></li>-->
                    <li class="BarraPp"><a href="Tareas.php" class="Rutas ">Tareas</a></li>
                    <li class="BarraPp"><a href="Registro.php" class="Rutas ">Registro Mecanicos</a></li>
                    <!--Sujeto a cambios-->
                    <!--<li class="BarraPp" style="float:right"><a href="Include/logout.php" class="Rutas">Cerrar sesion</a></li>-->
                    <!--Sujeto a cambios-->
                </ul>
            </nav>
        </header>
        <div class="padre">
            <div class="hijo">
                <div class="cont">
                    <table class="table table-hover table-condensed table-bordered">
                        <tr class="tr">
                            <th class="td">id</td>
                            <th class="td">nombre</td>
                            <th class="td">apellidos</td>
                            <th class="td">username</td>
                        </tr>
                        <?php
                            $sql = "SELECT id, nombre, apellido, username from Mecanicos";
                            $result=mysqli_query($connection, $sql);
                            while($ver=mysqli_fetch_row($result)){
                        ?>
                        <tr class="tr">
                            <td class="td"><?php echo $ver[0]?></td>
                            <td class="td"><?php echo $ver[1]?></td>
                            <td class="td"><?php echo $ver[2]?></td>
                            <td class="td"><?php echo $ver[3]?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>