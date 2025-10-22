<?php
require_once "conexion2.php";
// $conexion = conexion2();
$connection = conexionChida();
 if (!$connection) {
    die('F');
}
$ID_Siniestro = $_POST['ID_Siniestro'];
$sql = "DELETE from a_tareas where ID_Siniestro = '$ID_Siniestro'";
$statement = $connection->prepare($sql);
$execute = $statement->execute();
if ($execute) {
    echo 'SUCCESS'; // Si se hace con exito.
} else {
    echo 'SERVER_INTERNAL_ERROR'; // Si falla
}
?>