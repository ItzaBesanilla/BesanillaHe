<?php
    include("ConexionDB.php");
    $con=conectar();
    
    $sql="SELECT * FROM DatosAlumno";
    $query=mysqli_query($con,$sql);
    

?>

<!DOCTYPE html>
<html lang="es">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Registro de Alumnos</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

 </head>
 <body>
  <br>
  <div class="container mt-3">
    <?php

    session_start();
    $usuario=$_SESSION['username']; 

    if(!isset($usuario)){
      header('location: index.html');

    }else{
      echo " <h1> BIENVENID@ $usuario  </h1>" ; 
    }
    
    ?>

    <div class="container mt-3">
        <form class="text-center" action="Insert.php" method="POST">
         <br><h2>REGISTRO DEL ALUMNO</h2> <br><br>

          <div class="row">
             <div class="form-group col-sm-12 col-md-4 col-lg-5">
                 <strong> <label for="NoControl" class="control-label">Numero de control</label></strong>
                  <input name="NoControl" type="text" class="form-control" placeholder="Ej. 18100153"/> 
             </div>
 
          <div class="form-group col-sm-12 col-md-4 col-lg-7">
            <strong><label for="Correo">Correo institucional </label></strong>
            <input name="Correo" type="text"  class="form-control" placeholder="Ej. Lncontrol@nlaredo.tecnm.mx"/>
          </div>
          </div>

          <div class="row">
                 <div class="form-group col-sm-12 col-md-4 col-lg-4">
                  <strong>  <label for="Nombre" class="control-label">Nombre </label></strong>
                    <input name="Nombre" type="text" class="form-control"  placeholder="Nombre"/>
                 </div>

                 <div class="form-group col-sm-12 col-md-4 col-lg-4">
                    <strong><label for="Paterno" class="control-label">Apellido Paterno </label></strong>
                    <input name="Paterno" type="text" class="form-control"  placeholder="Paterno"/>
                 </div>

                 <div class="form-group col-sm-12 col-md-4 col-lg-4">
                    <strong><label for="Materno" class="control-label">Apellido Materno</label></strong>
                    <input name="Materno" type="text" class="form-control"  placeholder="Materno"/> <br>
                 </div>
          </div>
       
         <div class="row">
            <div class="form-group col-sm-12 col-md-4 col-lg-4">
                  <strong><label for="carrera" class="control-label"> Carrera:   </label></strong>
                <select name="Carrera" id="Carrera"> 
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
                    <select name="Semestre" > 
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
            <strong><label for="Turno" class="control-label"> Turno: </label></strong>
            <input type="radio" td="Matutino" name="Turno" value="Matutino">   Matutino
            <input type="radio" td="Vespertino" name="Turno" value="Vespertino">   Vespertino
           </div>
         
        </div>
        <br> <br>
         <button type ="submit" class="btn btn-primary">Guardar Registro</button>
      </form>
      <br>

      <form class="text-center" action="Salir.php" method="POST">
         <button type ="submit" class="btn btn-primary" >Cerrar Sesión</button>
         </form>
      
      
         <br>
        
      <br> <br><br>

      
       <div class="container mt-3">
          <form class="text-center" >
              <br><h2>REGISTROS REALIZADOS</h2> <br><br>
              </form>
          <table class="table">
          <thead class="table-success table-striped">
            <tr>
            <th>NoRegistro</th>
            <th>NoControl</th>
            <th>Nombre </th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Carrera </th>
            <th>Semestre</th>
            <th>Turno</th>
            <th>Correo</th>
            <th></th>
            <th></th>
            </tr>
         </thead>

         <tbody>
           <?php
           while($row=mysqli_fetch_array($query)){
             ?>
             <tr>
               <th><?php echo $row['NoRegistro']?></th>
               <th><?php echo $row['NoControl']?></th>
               <th><?php echo $row['Nombre']?></th>
               <th><?php echo $row['Apellido_Paterno']?></th>
               <th><?php echo $row['Apellido_Materno']?></th>
               <th><?php echo $row['Carrera']?></th>
               <th><?php echo $row['Semestre']?></th>
               <th><?php echo $row['Turno']?></th>
               <th><?php echo $row['Email']?></th>
                <th><a href="Actualizar.php?id=<?php echo $row['NoRegistro']?>" class="btn btn-info">Editar</a></th>
                <th><a href="Delete.php?id=<?php echo $row['NoRegistro']?>" class="btn btn-danger">Eliminar</a></th>
           </tr>
           <?php  
           }
           ?>
         </div>
         
         <br>
    
  </div>
  </div>
  </div>
</body>
</html>
