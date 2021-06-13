<?php

include('ConexionDB.php');


$NoControl=$_POST['NoControl'];
$Semestre=$_POST['Semestre'];
$Nombre=$_POST['Nombre'];
$Paterno=$_POST['Paterno'];
$Materno=$_POST['Materno'];
$Carrera=$_POST['Carrera'];
$Turno=$_POST['Turno'];
$Correo=$_POST['Correo'];


$Consulta="INSERT INTO `DatosAlumno` (`NoControl`,`Nombre`,`Apellido_Paterno`,`Apellido_Materno`,`Carrera`,`Turno`,`Semestre`,`Email`) 
VALUES ('$NoControl', '$Nombre', '$Paterno', '$Materno','$Carrera','$Turno','$Semestre','$Correo');" ;

$resultado=mysqli_query($conexion, $Consulta) or die("Error de registro");

// echo "registro exitoso";

   echo "<script> alert('¡Registro exitoso!'); 
 </script>;";

mysqli_close($conexion);


?>