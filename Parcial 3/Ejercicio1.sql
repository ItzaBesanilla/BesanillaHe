CREATE DATABASE BesanillaHe;
USE BesanillaHe;
CREATE TABLE Usuarios 
( idUsuario smallint not null auto_increment,
Nombre varchar(30),
apellidoPat varchar(25),
apellidoMat varchar(25),
carrera varchar(25),
Usuario		varchar(10),
Contraseña	varchar(40),
primary key (idUsuario)
);

INSERT INTO `Usuarios` (`Nombre`,`ApellidoPat`,`ApellidoMat`,'Carrera',`Usuario`,`Contraseña`) VALUES 
 ('Itzamara','Besanilla','Hernandez','Sistemas computacionales','ITZAMARA','BESANILLA'),
 

