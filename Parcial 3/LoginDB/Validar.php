<?php

$Login=$_POST['login'];
$Password=$_POST['Password'];
$PasswordMd5=md5($Password);
session_start();
$_SESSION['login']=$Login; 

$conexion= mysqli_connect("localhost","root","","besanillahe");

$consulta="SELECT*FROM usuario where Usuario='$Login' and contrasena='$PasswordMd5'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);



if($filas)
{
    $_SESSION['username']=$Login;
    header("location:Formulario.php");

} else  {

 ?>
 <?php
 include("C:\wamp\www\BesanillaHe\Parcial 3\LoginDB\Login\index.html");
   echo "<script> alert('Datos incorrectos'); 
 </script>;";
 
 
}

mysqli_free_result($resultado);
mysqli_close($conexion); 
