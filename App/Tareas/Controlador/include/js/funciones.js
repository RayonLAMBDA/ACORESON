
console.log("Hola");
function agregarDatos(Realizada, ID_Siniestro, Orden, Danios, Inicio, Termino){
console.log("Hola2");
    let cadena = "Realizada=" + Realizada + "&ID_Siniestro=" + ID_Siniestro
    + "&Orden=" + Orden + "&Danios=" + Danios + "&Inicio=" + Inicio + "&Termino=" + Termino;
    console.log("cadena")
    $.ajax({
        type:"POST",
        url:"/App/Tareas/Controlador/include/agregarDatos.php",
        data: cadena,
        success: function(r) {
            if (r == 'SUCCESS') {
                $('#tabla').load('../tabla.php');
                alertify.success("agregado con exito");
                console.log("Agregado con exito");
            } else {
                // Pero tendrias que convertir los datos aqui
                // let datos = JSON.parse(r);
                alertify.error(
                    // Este es como un if, pero que retorna algo.
                    r == 'ERROR_ID_EXISTE' ?
                        'El id ya existe'
                    : 
                        "Fallo en el servidor" // Si falla por alguna otra mamada pues ya dice this
                );
                console.log("Fallo en el servidor");
            }
        }
    });
    console.log("Adios");
}

//Modificar

function agregaform(datos){
    //Despliega datos
    
    //separa los datos
    ds = datos.split('||');
    //radiobutton
    if ($('Realizadau').val(ds[0]) =="si") {
        document.getElementById('Rsiu').checked = true;
        console.log("si");
    } else {
        document.getElementById('Rnou').checked = true;
        console.log("no")
    }
    $('#ID_Siniestrou').val(ds[1]);
    $('#Ordenu').val(ds[2]);
    $('#Daniosu').val(ds[3]);
    $('#Iniciou').val(ds[4]);
    $('#Terminou').val(ds[5]);
}

//Modifica actualizar

function actualizaDatos(){
    let radio1 = document.getElementById('Rsiu');
    let radio2 = document.getElementById('Rnou');
    let radioValue = 'si';
    radio1.addEventListener('change', () => {
        radioValue = 'si';
    });
    // Entonces lo que puedes hacer es poner una variable
    radio2.addEventListener('change', () => {
        radioValue = 'no';
    });
    Realizada = radioValue;
    ID_Siniestro = $('#ID_Siniestrou').val();
    Orden = $('#Ordenu').val();
    Danios = $('#Daniosu').val();
    Inicio = $('#Iniciou').val();
    Termino = $('#Terminou').val();
    let cadena = "Realizada=" + Realizada +
    "&ID_Siniestro=" + ID_Siniestro +
    "&Orden=" + Orden +
    "&Danios=" + Danios + 
    "&Inicio=" + Inicio + 
    "&Termino=" + Termino;
    $.ajax({
        type:"POST",
        url:"/App/Tareas/Controlador/include/actualizaDatos.php",
        data: cadena,
        success: function(r) {
            if (r == 'SUCCESS') {
                $('#tabla').load('/App/Tareas/Controlador/include/tabla.php');
                alertify.success("Actualizado con exito");
                console.log("Actualizado con exito");
            } else {
                // Pero tendrias que convertir los datos aqui
                // let datos = JSON.parse(r);
                alertify.error(
                    // Este es como un if, pero que retorna algo.
                    r == 'ERROR_ID_EXISTE' ?
                        'El id ya existe'
                    : 
                        "Fallo en el servidor" // Si falla por alguna otra mamada pues ya dice this
                );
                console.log("Fallo en el servidor");
            }
        }
    });
    
}

//alerta pregunta

function preguntar(ID_Siniestro) {
    alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?',
     function(){ alertify.success('Se elimino ' + eliminarDatos(ID_Siniestro)) }
                , function(){ alertify.error('C cancela')});
}

//eliminar

function eliminarDatos(ID_Siniestro) {
    cadena = "ID_Siniestro=" + ID_Siniestro;

    $.ajax({
        type: "POST",
        url:"/App/Tareas/Controlador/include/eliminarDatos.php" ,
        data: cadena,
        success: function() {
            if (r == 'SUCCESS') {
                $('#tabla').load('/App/Tareas/Controlador/include/tabla.php');
                alertify.success("Eliminado con exito");
                console.log("Eliminado con exito");
            } else {
                alertify.error(
                    r == 'ERROR_ID_EXISTE' ?
                        'El id ya existe'
                    : 
                        "Fallo en el servidor" 
                );
                console.log("Fallo en el servidor");
            }
        }
    });
}