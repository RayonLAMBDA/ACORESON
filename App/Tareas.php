<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Inicio</title>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Estilos/EstiloTareas.css">
        <link rel="stylesheet" href="Tareas/Controlador/Componentes/bootstrap/css/bootstrap.css" >
        <link rel="stylesheet" href="Tareas/Controlador/Componentes/alertifyjs/css/alertify.css" >
        <link rel="stylesheet" href="Tareas/Controlador/Componentes/alertifyjs/css/themes/default.css" >
        <script src="Tareas/Controlador/Componentes/jquerrys/jquery-3.5.0.min.js" ></script>
        <script src="Tareas/Controlador/include/js/funciones.js"></script>
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
        <div class="container">
            <div id="tabla">

            </div>
        </div>
        <!--nuevo registetro-->
        <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <br/>
                        <h4 class="modal-title" id="myModalLabel">Nueva Tarea</h4>
                    </div>
                    <div class="modal-body">
                        <label>Realizada</label>
                        <br/>
                        <label>
                            <input type="radio" name="Realizada" value="si" id="Rsi" class=""/>Si
                        <label>
                            <input type="radio" name="Realizada" value="no" id="Rno" class=""/>No
                        </label>
                        <br/>
                        <label>ID Siniestro</label>
                        <br/>
                            <input type="text" name="ID_Siniestro" max-lenght="6" id="ID_Siniestro" class=""/>
                        <br/>
                        <label>Orden</label>
                        <br/>
                        <input type="text" name="Orden" max-lenght="6" id="Orden" class=""/>
                        <br/>
                        <label>Daños</label>
                        <br />
                        <input type="text" name="Danios" max-lenght="6" id="Danios" class=""/>
                        <br/>
                        <label>Fecha Inicio</label>
                        <br/>
                        <input type="date" name="Inicio" id="Inicio" class=""/>
                        <br/>
                        <label>Fecha Finalizacion</label>
                        <br/>
                        <input type="date" name="Termino" id="Termino" class=""/>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal" id="Guardar_Nuevo">Agregar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- eleiminar -->
        <div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Modificar tarea</h4>
                    </div>
                    <div class="modal-body">
                        <input type="text" hidden="" id="ID" name="ID"/>
                        <label>Realizada</label>
                        <br/>
                        <label>
                            <input type="radio" name="Realizadau" value="si" id="Rsiu" class=""/>Si
                        <label>
                            <input type="radio" name="Realizadau" value="no" id="Rnou" class=""/>No
                        </label>
                        <br/>
                        <label>ID Siniestro</label>
                        <br/>
                            <input type="text" name="ID_Siniestrou" max-lenght="6" id="ID_Siniestrou" class="" disabled/>
                        <br/>
                        <label>Orden</label>
                        <br/>
                            <input type="text" name="Ordenu" max-lenght="6" id="Ordenu" class=""/>
                        <br/>
                        <label>Daños</label>
                        <br/>
                        <input type="text" name="Daniosu" max-lenght="6" id="Daniosu" class=""/>
                        <br/>
                        <label>Fecha Inicio</label>
                        <br/>
                        <input type="date" name="Iniciou" id="Iniciou" class=""/>
                        <br/>
                        <label>Fecha Finalizacion</label>
                        <br/>
                        <input type="date" name="Terminou" id="Terminou" class=""/>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>
                    </div>
                </div>
            </div>
        </div> 
    </body>
</html>
<script type="text/javascript">
    $(document).ready(function () {
        $('#tabla').load('Tareas/Controlador/include/tabla.php');
    });
</script>
<script type="text/javascript">
    

    // El valor de la variable lo metes a esta chingadera
    $(document).ready(function() {
        // Lo woa poner aqui para que se haga cuando ya haya cargado todo el pedo jajaj
        let radio1 = document.getElementById('Rsi');
        let radio2 = document.getElementById('Rno');
        let radioValue = 'si';
        radio1.addEventListener('change', () => {
            radioValue = 'si';
        });
        // Entonces lo que puedes hacer es poner una variable
        radio2.addEventListener('change', () => {
            radioValue = 'no';
        });
        $('#Guardar_Nuevo').click(function() {
            Realizada = radioValue;
            ID_Siniestro = $('#ID_Siniestro').val();
            Orden = $('#Orden').val();
            Danios = $('#Danios').val();
            Inicio = $('#Inicio').val();
            Termino = $('#Termino').val();
            agregarDatos(Realizada, ID_Siniestro, Orden, Danios, Inicio, Termino);
        });

        $('#actualizadatos').click(function () {
            actualizaDatos();
        });
    });
</script>
