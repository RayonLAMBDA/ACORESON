<?php
require_once "conexionInv.php";
// $conexion = conexion2();
$connection = conexionChida();
 if (!$connection) {
    die('F');
}
$CODIGO = $_POST['SERIE_CODIGO'];
$sql = "SELECT from Inventario where SERIE_CODIGO = '$CODIGO'";
$statement = $connection->prepare($sql);
$execute = $statement->execute();
if ($execute) {
    echo 'SUCCESS'; // Si se hace con exito.
} else {
    echo 'SERVER_INTERNAL_ERROR'; // Si falla
}
?>