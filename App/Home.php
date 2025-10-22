<html>
    <head>
        <title>
            Home
        </title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
        <link rel="stylesheet" href="Estilos/EstiloHome.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script src="Js/jquery.flexslider.js"></script>
        <script type="text/javascript" charset="utf-8">
            $(window).load(function() {
                $('.flexslider').flexslider();
            });
        </script>
        <style>
             #heading  { color: #3fa4a1; }
             #negro {color: #000;}
             #gris {color: #E98C29;}
             #rojo {color: #E93829;}
        </style>
    </head>
    <body>
        <header id="Ini_header">
            <nav id="Ini_nav">
                <ul class="BarraP">
                    <li class="BarraPp"><a href="index.php" class="Rutas">Home</a></li>
                    <li class="BarraPp"><a href="App/Inventario.php" class="Rutas ">Inventario</a></li>
                    <li class="BarraPp"><a href="App/Personal.php" class="Rutas ">Personal</a></li>
                    <!--<li class="BarraPp"><a href="Siniestro.php" class="Rutas ">Siniestro</a></li>-->
                    <!--<li class="BarraPp"><a href="App/Gastos.php" class="Rutas ">Gastos</a></li>-->
                    <li class="BarraPp"><a href="App/Tareas.php" class="Rutas ">Tareas</a></li>
                    <li class="BarraPp"><a href="App/Registro.php" class="Rutas ">Registro Mecanicos</a></li>
                    <!--Sujeto a cambios-->
                    <li class="BarraPp" style="float:right"><a href="Include/logout.php" class="Rutas">Cerrar sesion</a></li>
                    <!--Sujeto a cambios-->
                </ul>
            </nav>
        </header>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" style= "height: 100vh">
                    <img src="Imagenes\Chido1.jpg" class="d-block w-100" alt="Primero" >
                    <div class="carousel-caption d-none d-md-block">
                         <h1 id= gris>¿NECESITAS PLANIFICAR LAS TAREAS DEL TALLER?</h5>
                        <h3>En ACoreson te ayudamos</h3>
                    </div>
                </div>
                <div class="carousel-item" style= "height: 100vh">
                <img src="Imagenes\Chido2.jpg" class="d-block w-100" alt="Segundo">
                    <div class="carousel-caption d-none d-md-block">
                         <h1 id = heading>¿NECESITAS SABER COMO VA EL ESTATUS DE TU AUTO?</h5>
                        <h3>En ACoreson te ayudamos</h3>
                    </div>
                </div>
                <div class="carousel-item" style= "height: 100vh">
                <img src="Imagenes\Chido3.jpg" class="d-block w-100" alt="Tercero">
                    <div class="carousel-caption d-none d-md-block">
                         <h1 id=rojo >PORQUE NOSOTROS LOS UNIMOS Y AYUDAMOS</h1>
                        <h3 >Sigueneos en nuestras redes sociales</h3>
                        <ul class="icons">
							<li><a href="https://twitter.com/" target="_blank" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="https://www.facebook.com/" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
							<li><a href="https://www.instagram.com/" class="icon fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
						</ul>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>