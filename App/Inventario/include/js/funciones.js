function agregaform(datos){
    //Despliega datos
    
    //separa los datos
    ds = datos.split('||');
    $('#ARTICULO_DESCRIPCION').val(ds[0]);
    $('#MARCA_MODELO').val(ds[1]);
    $('#FECHA_COMPRA').val(ds[3]);
    $('#PRECIO_DE_COMPRA').val(ds[4]);
    $('#VALOR_ESTIMADO_ACTUAL').val(ds[5]);
}

function mostrarDatos(CODIGO){
    cadena = "CODIGO=" + CODIGO;

    $.ajax({
        type: "POST",
        url:"/App/Inventario/include/InventarioV.php" ,
        data: cadena,
        success: function() {
            if (r == 'SUCCESS') {
                //$('#tabla').load('/ProyectoACoreson/App/Tareas/Controlador/include/tabla.php');
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