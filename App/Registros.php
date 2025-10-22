<?php
    include_once 'conexion.php';
    $connection = conexionChida();
    if (!$connection) {
        die('F');
    }
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $username = $_POST['username'];
    $password= $_POST['password'];
    $pass = md5($password);
    $sql = "INSERT INTO Mecanicos(nombre, apellido, username, password) 
                values ('$nombre', '$apellidos', '$username', '$pass')";
    $statement = $connection->prepare($sql);
    $execute = $statement->execute();
    if ($execute) {
        echo 'SUCCESS'; // Si se hace con exito.
    } else {
        echo 'SERVER_INTERNAL_ERROR'; // Si falla
    }
    include_once 'Registro.php';
?>