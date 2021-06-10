CREATE DATABASE BesanillaHe;
USE BesanillaHe;
CREATE TABLE DatosAlumno 
( 
NoControl varchar(10),
Nombre varchar(50),
Carrera varchar(35),
Semestre varchar(25),
Email varchar(50),

primary key (NoControl)
);
 
INSERT INTO `DatosAlumno` (`NoControl`,`Nombre`,`Carrera`,`Semestre`,`Email`) 
VALUES ('18100153','Itzamara Besanilla Hdz','Sistemas Computacionales','Séptimo','18100153@nlaredo.tecnm.mx'),
('18100190', 'Eduardo Delgado Amador','Informática','Tercero','Eduardo@hotmail.com') ;

select * from DatosAlumno;