
<html>
    <head>
        <title>Inicio</title>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Estilos/EstilosIniSes.css">
    </head>
    <body class="cuerpos">
        <div class="contenedor">
            
            <div class="padre2">
                <a href="Contacto.php" class="Contacto">Contacto</a>
                <a href="https://mega.nz/file/LopWmCLT#G3XXj2vOggnckQybesFLIK5e76TvUtJA3UjKT68cNho" class="Contacto">Descargar</a>
                <div class="izq">
                    <div class="hijo">
                        <P></P>
                    </div>
                </div>    
            </div>
            <div class="padre">
                <div class="der">
                    <div class="hijo">
                        <h1>Inicio de sesion</h1>
                        <br/><br/><br/><br/><br/><br/><br/><br/><br/>
                        <div class="nieto">
                            <form method="POST" name="form" action="">
                                <p class="Mensaje"><br/>
                                <?php
                                    if(isset($errorLogin)){
                                        echo $errorLogin;
                                    }
                                ?><br/>
                                    <input type="text" placeholder="Usuario" name="username" required class="txt" />
                                </p><br/>
                                <p><br/>
                                    <input type="password" placeholder="Contraseña" name="password" required class="txt" id="pass">
                                </p><br/>
                                <input type="hidden" name="Error"/>
                                <center>
                                    <input type="submit" value="Iniciar" class="botoncito"/>
                                </center>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </body>
</html>