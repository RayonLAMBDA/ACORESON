var imagenes = ["Imagenes/carrusel1.jpg", "Imagenes/Carrusel2.jpg", "Imagenes/Carrusel3.jpg"], 
    contador = 0;

    function carrusel(carrusel_contenedor){
        carrusel_contenedor.addEventListener('click', e =>{
            let atras = carrusel_contenedor.querrySelector('.atras'),
                adelante = carrusel_contenedor.querrySelector('.adelante'),
                img = carrusel_contenedor.querrySelector('img'),
                target = e.target;


            if (target == atras) {
                if (cont > 0) {
                    img.src = imagenes[contador - 1];
                    contador--;
                } else {
                    img.src = imagenes[imagenes.length - 1];
                    contador = imagenes.length -1;
                }
            }else if (target == adelante) {
                if (cont < imagenes.length - 1) {
                    img.src = imagenes[contador + 1];
                    contador++;
                } else {
                    img.src = imagenes[0];
                    contador = 0;
                }
            }
        });
    }

    document.addEventListener("DOMContentLoaded", () =>{
        let carrusel_contenedor = document.querySelector('.carrusel_contenedor');

        carrusel(carrusel_contenedor);
    });