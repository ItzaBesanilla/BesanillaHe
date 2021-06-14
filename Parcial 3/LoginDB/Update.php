<?php
include('ConexionDB.php');
$conexion= mysqli_connect("localhost","root","","besanillahe");

$NoRegistro=$_POST['NoRegistro'];
$NoControl=$_POST['NoControl'];
$Semestre=$_POST['Semestre'];
$Nombre=$_POST['Nombre'];
$Paterno=$_POST['Paterno'];
$Materno=$_POST['Materno'];
$Carrera=$_POST['Carrera'];
$Turno=$_POST['Turno'];
$Correo=$_POST['Correo'];

$sql="UPDATE DatosAlumno SET NoControl='$NoControl', Nombre='$Nombre', Apellido_Paterno='$Paterno', Apellido_Materno='$Materno', Carrera='$Carrera', Turno='$Turno', Semestre='$Semestre', Email='$Correo' WHERE NoRegistro='$NoRegistro'"; 
$query=mysqli_query($conexion,$sql);

    
    if($query){
        echo "<script> alert('Se han actualizado los datos correctamente.');
                        window.location='Formulario.php'
                </script>;";
    }else{
        echo "<script> alert('Error. No se actualizaron los datos.');
                        window.location='Formulario.php'
                </script>;";
    }