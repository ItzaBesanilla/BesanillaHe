Create database tarea1;
Create table Usuario

( idUsuario smallint not null auto_increment,
nombre varchar(30),
Usuario		varchar(10),
Contraseña	varchar(10),
primary key (idUsuario)
);
insert into Usuario (Nombre, Usuario, contraseña)
values ('Itzamara Besanilla Hdz' 'itzamara', 'besanilla'),
('Eduardo Amador Delgado', 'Eduardo', 'amador');