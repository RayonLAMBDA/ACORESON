
<html>
    <head>
        <title>Inicio</title>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Estilos/EstiloContacto.css">
    </head>
    <body class="cuerpos">
        <div class="contenedor">
            
            <div class="padre2">
                <a href="index.php" class="Contacto">Inicio</a>
                <div class="izq">
                    <div class="hijo2">   
                        <P></P>
                    </div>
                </div>    
            </div>
            <div class="padre">
                <div class="der">
                    <div class="hijo">
                        <h1>Contacto</h1>
                        <br/><br/><br/><br/><br/><br/><br/><br/><br/>
                        <div class="nieto">
                            <form action="Include/contactos.php" method="post">
                            <div class="elem-group">
                                <label for="name"></label>
                                <br/>
                                <input type="text" id="name" name="visitor_name" placeholder="Nombre" pattern=[A-Z\sa-z]{3,20} required class="txt">
                                <br/>
                            </div>
                            <div class="elem-group">
                                <label for="email"></label>
                                <br/>
                                <input type="email" id="email" name="visitor_email" placeholder="Email" required class="txt">
                                <br/>
                            </div>
                            <div class="elem-group">
                                <label for="title"></label>
                                <br/>
                                <input type="text" id="title" name="email_title" class="txt" required placeholder="Razon de contacto" pattern=[A-Za-z0-9\s]{8,60}>
                                <br/>
                            </div>
                            <div class="elem-group">
                                <label for="message"></label>
                                <br/>
                                <textarea id="message" name="visitor_message" placeholder="Escribe tu mensaje" required class="txt"></textarea>
                                <br/>
                            </div>
                        
                                <button type="submit" class="botoncito">Enviar</button>
                                
                            </form>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </body>
</html>