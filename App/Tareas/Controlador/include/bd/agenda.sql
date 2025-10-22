

create database tareas;
use tareas;

create table a_tareas(
    Realizada varchar(2),
    ID_Siniestro varchar (10),
    Orden varchar(10),
    Danios varchar(25),
    Inicio date,
    Termino date,
    primary key (ID_SINIESTRO)
);

