<?php
require_once "conexion2.php";
    // $conexion = conexion2();
    $connection = conexionChida();
    if (!$connection) {
        die('F');
    }
    $Realizada = $_POST['Realizada'];
    $ID_Siniestro = $_POST['ID_Siniestro'];
    $Orden = $_POST['Orden'];
    $Danios = $_POST['Danios'];
    $Inicio = $_POST['Inicio'];
    $Termino = $_POST['Termino'];
    $sql = "UPDATE a_tareas set Realizada = '$Realizada',
                                Orden = '$Orden',
                                Danios = '$Danios',
                                Inicio = '$Inicio',
                                Termino = '$Termino'
                where ID_Siniestro = '$ID_Siniestro'";
    $statement = $connection->prepare($sql);
    $execute = $statement->execute(
    );
    if ($execute) {
        echo 'SUCCESS'; // Si se hace con exito.
    } else {
        echo 'SERVER_INTERNAL_ERROR'; // Si falla
    }
    
    ?>