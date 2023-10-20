<?php
/**
 * Script que a partir del radio almacenado en una variable y a partir de PI, calcule el área del 
 * círculo y la longitud de la circunferencia. Dibujar el círculo utilizando gráficos vectoriales
 * 
 * @author Quique Ruz
 */

// Variables 
$radio = 10;
$PI = 3.1416;
$area = $PI * $radio**2;
$longitud = 2 * $PI * $radio
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Enrique Ruz Del Rio">
    <title>Actividad 2</title>
</head>
<body>
    <h1>El área del círculo cuyo radio es <?php echo $radio?> es: <?php echo $area?></h1>
    <h1>La longitud de una circunferencia cuyo radio es <?php echo $radio?> es: <?php echo $longitud?></h1>
    <p>Circulo de radio <?php echo $radio?> dibujado:</p>
    </br>
    <svg width="300" height="300">
        <circle cx="120" cy="20" r="<?php echo $radio; ?>" stroke="black" stroke-width="2" fill="none"/>
    </svg>
</body>
</html>