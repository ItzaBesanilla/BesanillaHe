<?php

include('ConexionDB.php');
$conexion= mysqli_connect("localhost","root","","besanillahe");

$NoRegistro=$_GET['id'];

$sql="DELETE FROM DatosAlumno WHERE NoRegistro = '$NoRegistro'";

$query=mysqli_query($conexion,$sql);
 
if($query){
    echo "<script> alert('Registro eliminado.');
                    window.location='Formulario.php'
            </script>;";
    
}
?>


