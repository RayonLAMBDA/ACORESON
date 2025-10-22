create database usuariosadmon;
use usuariosadmon;

create table usuarios(
    id int IDENTITY(1,1),
    nombre VARCHAR(10),
    username VARCHAR(50), 
    password varchar(100),
    PRIMARY KEY (id)
);

