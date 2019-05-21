create database encriptarBlowfish;

use encriptarBlowfish;

create table usuario(
idUsuario int(11) auto_increment,
nombre_Usuario varchar(25),
email varchar(30),
password varchar(100),
Constraint PK_usuario primary key(idUsuario)  
);
