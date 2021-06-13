CREATE DATABASE BesanillaHe;
USE BesanillaHe;
DROP TABLE IF EXISTS DatosAlumno;
CREATE TABLE DatosAlumno 
( 
NoRegistro smallint not null auto_increment,
NoControl int(10),
Nombre varchar(50),
Apellido_Paterno varchar(20),
Apellido_Materno varchar(20),
Carrera varchar(35),
Semestre varchar(25),
Turno varchar(15),
Email varchar(50),

primary key (NoRegistro)
);

INSERT INTO `DatosAlumno` (`NoControl`,`Nombre`,`Apellido_Paterno`,`Apellido_Materno`,`Carrera`,`Turno`,`Semestre`,`Email`) 
VALUES ('18100190', 'Eduardo', 'Delgado', 'Amador','Informática','Matutino','Tercero','Eduardo@hotmail.com') ;

select * from DatosAlumno;
