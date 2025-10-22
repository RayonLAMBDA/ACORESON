<?php
    include_once 'Include/user.php';
    include_once 'Include/user_session.php';

    $userSession = new UserSession();
    $user = new User();
    if(isset($_SESSION['user'])){
        #echo "Hay sesion";
        $user->setUser($userSession->getCurrentUser());
        include_once 'App/Home.php';
        #header("location: App/home.php");
    }else if(isset($_POST['username']) && isset($_POST['password'])){
        #echo"Validacion de login";
        $userForm = $_POST['username'];
        $passForm = $_POST['password'];
        if($user->userExists($userForm, $passForm)){
            #echo "usuario Validado";
            $userSession->setCurrentUser($userForm);
            $user->setUser($userForm);
            include_once 'App/Home.php';
            #header("location: ../index.php");
        }else{
            #echo "no correecto";
            $errorLogin = "Nombre de usuario y/o password incorrecto";
            include_once 'InicioSesion.php';
        }
    }else{
        #echo "Login";
        include_once 'InicioSesion.php';
    }
?>
<!--
<html>
    <head>
        <title>Inicio</title>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Estilos/EstiloIndex.css">
    </head>
    <body class="cuerpos">
        <div class="contenedor">
            <div class="padre">
                <div class="izq">
                    <div class="hijo">
                        <h1>
                            <a href="index.php">
                                <img src="Imagenes/logo_a.jpg" class="imagensita">
                            </a>
                        </h1>
                        <P></P>
                    </div>
                </div>    
            </div>
            <div class="padre">
                <div class="der">
                    <div class="hijo">
                        <h1>Work-core</h1>
                        <br/><br/><br/><br/><br/><br/><br/><br/><br/>
                        <div class="nieto">
                            <p><br />
                                <a href="InicioSesion.php" class="botoncito">Inicio Sesión</a>
                            </p>
                            <p><br />
                                <a href=Contacto.php class="botoncito">Contactanos</a>
                            </p>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </body>
</html>-->