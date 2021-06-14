<?php
function conectar(){
    $conexion= mysqli_connect("localhost","root","");
    $db="besanillahe";

   mysqli_select_db($conexion,$db);
    return $conexion;
}


?>