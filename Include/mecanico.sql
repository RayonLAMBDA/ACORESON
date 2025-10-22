
create database mecanico;
use mecanico;
create table Tareas(
    ID_tar int (100),
    Nombre varchar (100),
    Descripcion varchar (100),
    INICIO varchar (100),
    Finito varchar (100)
);

create table Salario(
    ID_sal int (100),
    Monto_pasado int (100)
);

create table Reseñas(
    ID_Res int (100),
    ID_Mec int (100),
    Nombre_Mec varchar (100),
    Descripcion varchar (100),
    Fecha DATE
);