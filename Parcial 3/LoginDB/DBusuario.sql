CREATE DATABASE IF NOT EXISTS besanillahe; 
use besanillahe;
Create table Usuario
( idUsuario smallint not null auto_increment,
  nombre    varchar(30),
  Usuario varchar(20),
  contrasena varchar(40),
 
  PRIMARY KEY(idUsuario)
);

alter table usuario change contraseña contrasena varchar(40);
insert into Usuario (nombre, Usuario, contraseña)
values ('Itzamara Besanilla Hdz','itzamara','0f1dbdede245f84e02c17da51c2c2dd3'), -- besanilla
('Eduardo Amador','Eduardo','299ad925b432e99fbc250cf7fde69c51'); -- amador

select * from Usuario;