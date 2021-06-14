<?php

include('ConexionDB.php');
$conexion= mysqli_connect("localhost","root","","besanillahe");

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

$resultado=mysqli_query($conexion, $Consulta); 

if($resultado){
    echo "<script> alert('Los datos se ingresaron correctamente.');
                    window.location='Formulario.php'
            </script>;";
}else{
    echo "<script> alert('Error. Registro incorrecto.');
                    window.location='Formulario.php'
            </script>;";
}

mysqli_close($conexion);

?>