<?php

include "conectar.php";

try {
    $consultaSql = "select nombre, apPaterno, apMaterno, carrera, usuario, contraseña from Usuarios";
    $consulta = $con -> prepare($consultaSql);
    $consulta -> execute();
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);

    print"<h2><pre>PDO::FETCH_ASOC</pre></h2>";
    print "<br>";
    var_dump($resultado);
    print "<br>";
    printf("<b>nombre    = </b> %s <br>",$resultado['nombre']);
    printf("<b>apPaterno = </b> %s <br>",$resultado['apPaterno']);
    printf("<b>apMaterno = </b> %s <br>",$resultado['apMaterno']);
    printf("<b>Carrera   = </b> %s <br>",$resultado['Carrera']);
    printf("<b>Usuario   = </b> %s <br>",$resultado['Usuario']);
    printf("<b>Constraseña = </b> %s <br>",$resultado['Contaseña']);
    print "<br><br><br>";

    $consulta->closeCursor();

} catch(PDOException $e) {
    echo "Error de consulta en la base de datos";
    echo $e->getMessage();
}
?>