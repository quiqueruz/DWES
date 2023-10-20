<?php
/**
 * Carga fecha de nacimiento en variables y calcula la edad
 * 
 * author: Enrique Ruz Del Río
 * date: 27/09/2023
 * 
 */

$dia = 27;
$mes = 9;
$anyo = 2000;

$diaHoy = date("d");
$mesHoy = date("m");
$anyoHoy = date("Y");

$edad = $anyoHoy - $anyo;
if (!($mes<=$mesHoy && $dia<=$diaHoy)) {
    $edad--;
};

// VISTA
echo 'Si has nacido el '.$dia.'/'.$mes.'/'.$anyo.', tienes '.$edad.' años.'
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Enrique Ruz Del Rio">
    <title>Prueba 4</title>
</head>
<body>
    <p>Código en <a href="https://github.com/quiqueruz/DWES/blob/main/ud1/prueba4.php">GitHub</a></p>
</body>
</html>