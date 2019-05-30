create database encriptarBlowfish;

use encriptarBlowfish;

create table usuario(
idUsuario int(11) auto_increment,
nombre_Usuario varchar(25),
email varchar(30),
password varchar(100),
Constraint PK_usuario primary key(idUsuario)
);


create table producto(
id_Codigo varchar(19),
nombre_producto varchar(70),
cantidad int(11),
precio float(15,2),
Constraint PK_producto primary key(id_Codigo)
);


create table personal(
	id_Personal varchar(19),
	nombre_Personal varchar(60),
	correo varchar(30),
	Constraint PK_personal primary key(id_Personal)
);
