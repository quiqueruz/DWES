<?php
/**
 * Escribir un script que utilizando variables permita obtener el siguiente resultado
 * Valor es string.
 * Valor es double.
 * Valor es boolean.
 * Valor es integer.
 * Valor is NULL.
 */

// Variables
$v1 = "hola mundo";
$v2 = 13243546574839209112;
$v3 = true;
$v4 = 12;
$v5 = null;


echo "Valor es " . gettype($v1);
echo "<br/>";
echo "Valor es " . gettype($v2);
echo "<br/>";
echo "Valor es " . gettype($v3);
echo "<br/>";
echo "Valor es " . gettype($v4);
echo "<br/>";
echo "Valor es " . gettype($v5);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Enrique Ruz Del Rio">
    <title>Actividad 9</title>
</head>
<body>
    <p>Código en <a href="https://github.com/quiqueruz/DWES/blob/main/ud2/act9.php">GitHub</a></p>
</body>
</html>