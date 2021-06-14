<?php 
    include("ConexionDB.php");
    $conexion= mysqli_connect("localhost","root","","besanillahe");

$id=$_GET['id'];

$sql="SELECT * FROM DatosAlumno WHERE NoRegistro='$id'";
$query=mysqli_query($conexion,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
    
    <div class="container mt-5">
     <form action="Update.php" method="POST">
                    
    <input type="hidden" name="NoRegistro" value="<?php echo $row['NoRegistro']  ?>">

                                
    <div class="container mt-3">
        <form class="text-center">
        
          <div class="row">
             <div class="form-group col-sm-12 col-md-4 col-lg-5">
                 <strong> <label for="NoControl" class="control-label">Numero de control</label></strong>
                  <input name="NoControl" type="text" class="form-control" placeholder="Ej. 18100153"  value="<?php echo $row['NoControl']  ?>"/> 
             </div>
 
          <div class="form-group col-sm-12 col-md-4 col-lg-7">
            <strong><label for="Correo">Correo institucional </label></strong>
            <input name="Correo" type="text"  class="form-control" placeholder="Ej. Lncontrol@nlaredo.tecnm.mx"  value="<?php echo $row['Email']  ?>"/>
          </div>
          </div>

          <div class="row">
                 <div class="form-group col-sm-12 col-md-4 col-lg-4">
                  <strong>  <label for="Nombre" class="control-label">Nombre </label></strong>
                    <input name="Nombre" type="text" class="form-control"  placeholder="Nombre"  value="<?php echo $row['Nombre']  ?>"/>
                 </div>

                 <div class="form-group col-sm-12 col-md-4 col-lg-4">
                  <strong>  <label for="Paterno" class="control-label">Apellido Paterno </label></strong>
                    <input name="Paterno" type="text" class="form-control"  placeholder="Paterno"  value="<?php echo $row['Apellido_Paterno']  ?>"/>
                 </div>

                 <div class="form-group col-sm-12 col-md-4 col-lg-4">
                    <strong><label for="Materno" class="control-label">Apellido Materno</label></strong>
                    <input name="Materno" type="text" class="form-control"  placeholder="Materno"  value="<?php echo $row['Apellido_Materno']  ?>"/> <br>
                 </div>
          </div>
       
         <div class="row">
            <div class="form-group col-sm-12 col-md-4 col-lg-4">
                  <strong><label for="carrera" class="control-label"> Carrera:   </label></strong>
                <select name="Carrera" id="Carrera" value="<?php echo $row['Carrera']  ?>"> 
                <option value="Gestion empresarial"> Gestion empresarial</option> 
                <option value="Sistemas Computacionales">  Sistemas Computacionales</option>
                <option value="Contador Publico">Contador Publico </option>
                <option value="Mecatronica">Mecatronica </option>
                <option value="Administracion">Administracion </option>
                <option value="Electrónica">Electrónica </option>
                <option value="Industrial">Industrial </option>
             </select>
             </div> 

             <div class="form-group col-sm-12 col-md-4 col-lg-4">
                    <strong><label for="Semestre" class="control-label" > Semestre:   </label></strong>
                    <select name="Semestre" value="<?php echo $row['Semestre']  ?>"> 
                        <option value="Primero"> Primero </option> 
                        <option value="Segundo"> Segundo </option>
                        <option value="Tercero"> Tercero </option>
                        <option value="Cuarto"> Cuarto </option>
                        <option value="Quinto"> Quinto </option>
                        <option value="Sexto">Sexto </option>
                        <option value="Septimo">Septimo </option>
                        <option value="Octavo">Octavo </option>
                        <option value="Noveno">Noveno </option>
                    </select>
                  </div> 
  
         <div class="form-group col-sm-12 col-md-4 col-lg-4">
            <strong><label for="Turno" class="control-label" value="<?php echo $row['Turno']  ?>" > Turno:   </label></strong>
            <input type="radio" td="Matutino" name="Turno" value=" Matutino">   Matutino
            <input type="radio" td="Vespertino" name="Turno" value="Vespertino">   Vespertino
           </div>
         
        </div>
        <br><br>
}    
                     <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>