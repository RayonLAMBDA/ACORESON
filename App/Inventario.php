<?php
    include_once "Inventario/include/conexionInv.php";
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
        <link rel="stylesheet" href="../Estilos/EstiloInventario.css">
        <link rel="stylesheet" href="Tareas/Controlador/Componentes/bootstrap/css/bootstrap.css" >
        <link rel="stylesheet" href="Tareas/Controlador/Componentes/alertifyjs/css/alertify.css" >
        <link rel="stylesheet" href="Tareas/Controlador/Componentes/alertifyjs/css/themes/default.css" >
        <script src="https://kit.fontawesome.com/d77ddc471b.js" crossorigin="anonymous"></script>
        <script src="Tareas/Controlador/Componentes/jquerrys/jquery-3.5.0.min.js" ></script>
        <script src="Inventario/include/js/funciones.js"></script>
        <script src="Tareas/Controlador/Componentes/bootstrap/js/bootstrap.js" ></script>
        <script src="Tareas/Controlador/Componentes/alertifyjs/alertify.js" ></script>
    </head>
    <body class="cuerpos">
    <header id="Ini_header">
            <nav id="Ini_nav">
                <ul class="BarraP">
                    <li class="BarraPp"><a href="../index.php" class="Rutas">Home</a></li>
                    <li class="BarraPp"><a href="Inventario.php" class="Rutas ">Inventario</a></li>
                    <li class="BarraPp"><a href="Personal.php" class="Rutas ">Personal</a></li>
                    <!--<li class="BarraPp"><a href="Siniestro.php" class="Rutas ">Siniestro</a></li>-->
                    <!--<li class="BarraPp"><a href="Gastos.php" class="Rutas ">Gastos</a></li>-->
                    <li class="BarraPp"><a href="Tareas.php" class="Rutas ">Tareas</a></li>
                    <li class="BarraPp"><a href="Registro.php" class="Rutas ">Registro Mecanicos</a></li>
                    <!--Sujeto a cambios-->
                    <!--<li class="BarraPp" style="float:right"><a href="Include/logout.php" class="Rutas">Cerrar sesion</a></li>-->
                    <!--Sujeto a cambios-->
                </ul>
            </nav>
        </header>
        <div class="contenedor">
            <div class="padre">
                <div class="izq">
                    <div class="hijo">
                        <h1>
                            Inventario
                        </h1>

                        <br/>
                        <label>ARTICULO/DESCRIPCION</label>
                        <br/>
                            <input type="text"
                             name="ARTICULO_DESCRIPCION" id="ARTICULO_DESCRIPCION" class="" disabled/>
                        <br/>
                        <label>MARCA/MODELO</label>
                        <br/>
                            <input type="text" name="MARCA_MODELO" id="MARCA_MODELO" class="" disabled/>
                        <br/>
                        <label>FECHA_COMPRA</label>
                        <br/>
                            <input type="text" name="FECHA_COMPRA"  id="FECHA_COMPRA" class="" disabled/>
                        <br/>
                        <label>PRECIO_DE_COMPRA</label>
                        <br/>
                            <input type="text" name="PRECIO_DE_COMPRA"  id="PRECIO_DE_COMPRA" class="" disabled/>
                        <br/>
                        <label>VALOR_ESTIMADO_ACTUAL </label>
                        <br/>
                            <input type="text" name="VALOR_ESTIMADO_ACTUAL"  id="VALOR_ESTIMADO_ACTUAL" class="" disabled/>
                        <br/>
                        <P></P>
                    </div>
                </div>    
            </div>
            <div class="padre">
                <div class="der">
                    <div class="hijo">
                    <table class="table table-hover table-condensed table-bordered">
                        <tr class="tr">
                            <th class="td">CODIGO</th>
                            <th classs="td">Ver</th>
                        </tr>
                        <?php
                            $sql = "SELECT ARTICULO_DESCRIPCION,
                            MARCA_MODELO,
                            SERIE_CODIGO, 
                            FECHA_COMPRA,
                            PRECIO_DE_COMPRA,
                            VALOR_ESTIMADO_ACTUAL from Inventario";
                            $result=mysqli_query($connection, $sql);
                            while($ver=mysqli_fetch_row($result)){
                                $datos = $ver[0]."||".
                                        $ver[1]."||".
                                        $ver[2]."||".
                                        $ver[3]."||".
                                        $ver[4]."||".
                                        $ver[5];
                        ?>
                        <tr class="tr">
                            <td class="td"><?php echo $ver[2]?></td>
                            <td>
                                <button class="btn btn-warning" data-toggle="modal" 
                                data-target="#modalEdicion" onclick="agregaform('<?php echo $datos?>')">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </button>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                        
                    </div>
                </div> 
            </div>
        </div>
    </body>

</html>
<!--
<script type="text/javascript">
    $(document).ready(function () {
        $('#tabla').load('Tareas/Controlador/include/tabla.php');
    });
</script>
-->