<!DOCTYPE html>
<html lang="es">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Boostrap</title>
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

    <div class="container">
        <form class="text-center" action="Insert.php" method="POST">
         <br><h2>REGISTRO DEL ALUMNO</h2> <br><br>

          <div class="row">

          <div class="form-group col-xs-4">
            <strong> <label for="NoRegistro" class="control-label">ID Registro</label></strong>
            <input id="NoRegistro" type="text" class="form-control" placeholder="00"disabled/>
      </div>
                 <div class="form-group col-sm-12 col-md-6 col-lg-3">
                     <strong> <label for="NoControl" class="control-label">Número de control</label></strong>
                      <input name="NoControl" type="text" class="form-control" placeholder="Ej. 18100153"/> 
                 </div>
 
                  <div class="form-group col-sm-12 col-md-6 col-lg-3">
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
          </div>

          <div class="row">
                 <div class="form-group col-sm-12 col-md-4 col-lg-4">
                  <strong>  <label for="Nombre" class="control-label">Nombre </label></strong>
                    <input name="Nombre" type="text" class="form-control"  placeholder="Nombre"/>
                 </div>

                 <div class="form-group col-sm-12 col-md-4 col-lg-4">
                    <strong><label for="Paterno" class="control-label">Apellido Materno </label></strong>
                    <input name="Paterno" type="text" class="form-control"  placeholder="Paterno"/>
                 </div>

                 <div class="form-group col-sm-12 col-md-4 col-lg-4">
                    <strong><label for="Materno" class="control-label">Apellido Paterno</label></strong>
                    <input name="Materno" type="text" class="form-control"  placeholder="Materno"/> <br>
                 </div>
          </div>
       
         <div class="row">
          <div class="form-group col-sm-12 col-md-6 col-lg-3">
            <strong><label for="carrera" class="control-label"> Carrera:   </label></strong>
            <select name="Carrera" id="Carrera"> 
                <option value="GeEmp"> Gestión empresarial</option> 
                <option value="SisCom">  Sistemas Computacionales</option>
                <option value="ContPu">Contador Público </option>
                <option value="Mec">Mecatrónica </option>
                <option value="Admin">Administración </option>
                <option value="Elec">Electrónica </option>
                <option value="Ind">Industrial </option>
            </select>
          </div> 

         <div class="form-group col-sm-12 col-md-6 col-lg-3">
            <strong><label for="Turno" class="control-label"> Turno: </label></strong>
            <input type="radio" td="Matutino" name="Turno" value="Mat">   Matutino
            <input type="radio" td="Vespertino" name="Turno" value="Vesp">   Vespertino
           </div>
         </div>

        <div class="row">
        <div class="form-group col-sm-12 col-md-9 col-lg-5">
        <strong><label for="Correo">Correo institucional </label></strong>
        <input name="Correo" type="text"  class="form-control" placeholder="Ej. Lncontrol@nlaredo.tecnm.mx"/>
        </div>
       </div>

         <button type ="submit" class="btn btn-primary">Guardar Registro</button>
      </form>

      <form  action="Consulta.php" method="POST">
         <button type ="submit" class="btn btn-primary">Consultar registros</button>
       </form>
      <br>
       <form  action="Update.php" method="POST">
         <button type ="submit" class="btn btn-primary">Editar</button> <br>
       </form>
        <br>
       <form   method="POST">
         <button type ="reset" class="btn btn-primary">Limpiar</button>
         
       </form>
        <br>
       <form  action="Salir.php" method="POST">
         <button type ="submit" class="btn btn-primary" >Cerrar Sesión</button>
       </form>
       <br>
       
     
  </div>
  </div>
</body>
</html>
