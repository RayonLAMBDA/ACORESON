<?php

function conexion2(){
    $host="localhost";
    $user="root";
    $db="Damcar";
    $password="n0m3l0";
    
    $conexion = mysqli_connect($host, $user, $password, $db);
    return $conexion;
}

function conexionChida() {
    try {
        $conn = new PDO('mysql:host=localhost;port=3306;dbname=Damcar', 'root', 'n0m3l0');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $conn;
    } catch (PDOException $err) {
        echo $err;
        return false;
    }
}

?>