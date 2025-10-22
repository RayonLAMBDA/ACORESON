use usuariosadmon;

create table usuarios(
    ARTICULO_DESCRIPCION varchar(40),
    MARCA_MODELO VARCHAR(10),
    SERIE_CODIGO VARCHAR(50), 
    FECHA_COMPRA date,
    PRECIO_DE_COMPRA int(11),
    VALOR_ESTIMADO_ACTUAL int(11),
    PRIMARY KEY (SERIE_CODIGO)
);

