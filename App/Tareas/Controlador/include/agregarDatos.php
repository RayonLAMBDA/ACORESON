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

    // Pa verificar que no exista
    $sql = 'SELECT ID_Siniestro FROM a_tareas WHERE ID_Siniestro = :id';
    // Se "prepara" la query
    $statement = $connection->prepare($sql); // En este pones tu sql, pero no se ejecuta
    // Se ejecuta
    $result = $statement->execute(array( // Aqui se eejcuta, y se le pasan los valores
        // Se le pasa un arreglo para sustituir el placeholder por el arreglo
        // Esto es más seguro que poner los datos directo en la query.
        ':id' => $ID_Siniestro
    )); 
    //Le pedimos los datos en un arreglo
    $result = $statement->fetchAll(PDO::FETCH_ASSOC); // Aqui se piden los datos, te devuelve un arreglo
    // Si quieres pasar estos datos a JS solo haces esto
    // echo json_encode($result); // y en js lo recibes como un json facil de manipular
    if (count($result) != 0) {
        echo 'ERROR_ID_EXISTE';
        // Si ya existe imprime el error y termina la ejecución.
        exit;
    }
    // Despues intenta insertar esta shit
    $sql = "INSERT into a_tareas (Realizada, ID_Siniestro, Orden, Danios, Inicio, Termino)
            values (:real, :idsin, :ord, :dan, :ini, :term)";
    $statement = $connection->prepare($sql);
    $execute = $statement->execute(array(
        ':real' => $Realizada,
        ':idsin' => $ID_Siniestro,
        ':ord' => $Orden,
        ':dan' => $Danios,
        ':ini' => $Inicio,
        ':term' => $Termino
    ));
    // Pues, esta madre dice que la query no se realizó ptm, aparte como es una query de tipo insert, 
    // no devuelve datos, lo que debes hacer es nadamas retornar si se hizo o nel
    if ($execute) {
        echo 'SUCCESS'; // Si se hace con exito.
    } else {
        echo 'SERVER_INTERNAL_ERROR'; // Si falla
    }
    // echo $result;
?>