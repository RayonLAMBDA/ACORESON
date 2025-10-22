
<html>
    <head>
        <title>Registro</title>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Estilos/EstiloRegistro.css">
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
        <div class="contenedor">
            <div class="padre">
                <div class="izq">
                    <div class="hijo">
                        <h1>
                            
                        </h1>
                        <P></P>
                    </div>
                </div>    
            </div>
            <div class="padre">
                <div class="der">
                    <div class="hijo">
                        <h1>Registro Mecanicos</h1>
                        <br/><br/><br/><br/><br/><br/><br/><br/><br/>

                        <div class="nieto">
                            <form method="POST" name="form" action="Registros.php">
                                <p><br/>
                                    <input type="text" placeholder="Nombre" name="nombre" required class="txt" id="nombre"/>
                                </p><br/>
                                <p><br/>
                                    <input type="text" placeholder="Apellidos" name="apellidos" required class="txt" id="apellidos"/>
                                </p><br/>
                                    <input type="text" value="M." name="rell" id="rell" class="txt" hidden/>
                                <p><br/>
                                    <input type="text" placeholder="username" name="username" required class="txt" id="username"/>
                                </p><br/>
                                <p><br/>
                                    <input type="password" placeholder="Contraseña" name="password" required class="txt" id="password">
                                </p><br/>
                                <input type="hidden" name="Error"/>
                                <input type="submit" value="Iniciar" class="botoncito" id="Iniciar"/>
                            </form>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </body>
    
<script type="text/javascript">
    // El valor de la variable lo metes a esta chingadera
    $(document).ready(function() {
        $('#Iniciar').click(function() {
            nombre = $('#nombre').val();
            apellidos = $('#apellidos').val();
            username = $('#rell').val() + $('#username').val();
            password = $('#password').val();
            agregarDatos(nombre, apellidos, username, password);
        });
    });
</script>
</html>
