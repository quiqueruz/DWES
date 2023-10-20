<?php
/**
 * Almacena tres números y muéstralos de manera ordenada
 * 
 * author: Enrique Ruz Del Río
 * date: 27/09/2023
 * 
 */
$num1 = 17;
$num2 = 14;
$num3 = 1;

if ($num1 > $num2) {
    if ($num2 > $num3) {
        echo 'Los números ordenados son: '.$num1.' - '.$num2.' - '.$num3;
    }
    else {
        echo 'Los números ordenados son: '.$num1.' - '.$num3.' - '.$num2;
    }
if ($num2 > $num1) {
    
    if ($num1 > $num3) {
        echo 'Los números ordenados son: '.$num2.' - '.$num1.' - '.$num3;
    }
    else {
        echo 'Los números ordenados son: '.$num2.' - '.$num3.' - '.$num1;
    }
}
if ($num3 > $num1) {
    
    if ($num1 > $num2) {
        echo 'Los números ordenados son: '.$num3.' - '.$num1.' - '.$num2;
    }
    else {
        echo 'Los números ordenados son: '.$num3.' - '.$num2.' - '.$num1;
    }
}
};
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Enrique Ruz Del Rio">
    <title>Prueba 2</title>
</head>
<body>
    <p>Código en <a href="https://github.com/quiqueruz/DWES/blob/main/ud1/prueba1.php">GitHub</a></p>
</body>
</html>