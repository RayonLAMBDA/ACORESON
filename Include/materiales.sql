CREATE DATABASE Materiales;
use Materiales;
create table hierro(
    ID_mat int (100) primary key not null,
    Nombre VARCHAR (100),
    Ubicacion varchar (100),
    Marca varchar (100),
    Modelo varchar (100),
    Almacenadas int (100)
);

create table carbono (
    ID int (100) primary key not null,
    Nombre VARCHAR (100),
    Marca varchar (100),
    Almacenadas int (100)
);

create table aluminio (
    ID int (100) primary key not null,
    Nombre VARCHAR (100),
    Marca varchar (100),
    Modelo varchar (100),
    Almacenadas int (100)
);

create table Cristales (
    ID int (100) primary key not null,
    Nombre VARCHAR (100),
    Marca varchar (100),
    Modelo varchar (100),
    Blindados Varchar (2),
    Polarizados Varchar (2),
    Almacenadas int (100)
);

create table Interiores (
    ID int (100) primary key not null,
    Nombre VARCHAR (100),
    Marca varchar (100),
    Piel varchar (2),
    Color varchar (100),
    Almacenadas int (100)
);