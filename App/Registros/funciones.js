function agregarDatos(nombre, apellidos, username, password){
    console.log("Hola2");
        let cadena = "nombre=" + nombre + "&apellidos=" + apellidos
        + "&username=" + username + "&password=" + password;
        console.log(cadena);
        $.ajax({
            type:"POST",
            url:"/App/Registros.php",
            data: cadena,
            success: function(r) {
                if (r == 'SUCCESS') {
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