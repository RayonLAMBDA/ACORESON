<html>
    <head>
        <title>Inicio</title>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../Estilos/EstiloSiniestro.css">
        <link rel="stylesheet" href="../../Estilos/pushbar.css">
    </head>
    <body class="cuerpos">
    <header id="Ini_header">
            <nav id="Ini_nav">
                <ul class="BarraP">
                    <li class="BarraPp"><a href="../../index.php" class="Rutas">Home</a></li>
                    <li class="BarraPp"><a href="../Inventario.php" class="Rutas ">Inventario</a></li>
                    <li class="BarraPp"><a href="../Personal.php" class="Rutas ">Personal</a></li>
                    <li class="BarraPp"><a href="../Siniestro.php" class="Rutas ">Siniestro</a></li>
                    <!--<li class="BarraPp"><a href="Gastos.php" class="Rutas ">Gastos</a></li>-->
                    <li class="BarraPp"><a href="../Tareas.php" class="Rutas ">Tareas</a></li>
                    <li class="BarraPp"><a href="../Registro.php" class="Rutas ">Registro Mecanicos</a></li>
                    <!--Sujeto a cambios-->
                    <!--<li class="BarraPp" style="float:right"><a href="Include/logout.php" class="Rutas">Cerrar sesion</a></li>-->
                    <!--Sujeto a cambios-->
                </ul>
            </nav>
        </header>
        <div class="contenedor">
            <main>
                <nav>
                    <button class="btn-menu" data-pushbar-target="pushbar-menu"><i class="fas fa-bars"></i></button>
                    <a href="#" class="banner" data-pushbar-target="pushbar-productos">Materiales</a>
                </nav>
                <section class="productos">
                    <figure>
                        <img src="../../Imagenes/img13.jpg" alt="">
                        <figcaption>
                            <a href="Siniestro/Hierro.php">
                                <span>Hierro</span>
                                <span>Ir</span>
                            </a>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="../../Imagenes/img14.jpg" alt="">
                        <figcaption>
                            <a href="#" data-pushbar-target="pushbar-carrito">
                                <span>Fibra de carbono</span>
                                <span>Ir</span>
                            </a>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="../../Imagenes/img15.jpg" alt="">
                        <figcaption>
                            <a href="#" data-pushbar-target="pushbar-carrito">
                                <span>Aluminio</span>
                                <span>Ir</span>
                            </a>
                        </figcaption>
                    </figure>
                </section>
                <section class="productos">
                    <figure>
                        <img src="../../Imagenes/375.jpg" alt="">
                        <figcaption>
                            <a href="#" data-pushbar-target="pushbar-carrito">
                                <span>Cristales</span>
                                <span>Ir</span>
                            </a>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="../../Imagenes/374.jpg" alt="">
                        <figcaption>
                            <a href="#" data-pushbar-target="pushbar-carrito">
                                <span>Interiores</span>
                                <span>Ir</span>
                            </a>
                        </figcaption>
                    </figure>
                </section>
            </main>
            <div data-pushbar-id="pushbar-menu" class="pushbar from_left pushbar-menu">
                <div class="btn-cerrar">
                    <button data-pushbar-close><i class="fas fa-times"></i></button>
                </div>
                <nav class="menu">
                    <a href="../Siniestro.php">Inicio</a>
                    <a href="REF.php">Ref</a>
                    <a href="Horas.php">Horas</a>
                    <a href="Mecanico.php">Mecanico</a>
                    <a href="Materiales.php">Materiales</a>
                </nav>
            </div>
        </div>
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <script src="../../Js/pushbar.js"></script>
        <script>
            var pushbar = new Pushbar({
                blur: true,
                overlay: true
            });
        </script>
    </body>
</html>