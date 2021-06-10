<?php

include "conectar.php";

try {
    $consultaSql = "select NoControl, Nombre, Carrera, Semestre, Email from DatosAlumno";
    $consulta = $con -> prepare($consultaSql);
    $consulta -> execute();
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);

    print"<h2><pre>PDO::FETCH_ASOC</pre></h2>";
    print "<br>";
    var_dump($resultado);
    print "<br>";
    printf("<b>NoControl    = </b> %s <br>",$resultado['NoControl']);
    printf("<b>Nombre    = </b> %s <br>",$resultado['Nombre']);
    printf("<b>Carrera   = </b> %s <br>",$resultado['Carrera']);
    printf("<b>Semestre   = </b> %s <br>",$resultado['Semestre']);
    printf("<b>Email = </b> %s <br>",$resultado['Email']);
    print "<br><br><br>";

    $consulta->closeCursor();

} catch(PDOException $e) {
    echo "Error de consulta en la base de datos.";
    echo $e->getMessage();
}
?>
