<?php
/**
 * Carga en variables mes y año e indica el número de días del mes. 
 * Utiliza la estructura de un switch.
 * 
 * author: Enrique Ruz Del Río
 * date: 27/09/2023
 * 
 */
$mes = 2;
$anyo = 2024;
$nDias = 31;

switch ($mes) {
    case 4:
    case 6:
    case 9:
    case 11:
        $nDias = 30;
        break;
    
    case 2: 
        // Cambiamos el número de días a 28 al ser febrero
        $nDias = 28;

        // Si el año es bisiesto sumamos 1 día a febrero
        if($anyo % 4 == 0 and ($anyo % 100 != 0 or $anyo % 400 == 0)) {
            $nDias++;
        }
        break;
}

// VISTA
echo 'El mes '.$mes.' del año '.$anyo.' tiene '.$nDias.' días.';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Enrique Ruz Del Rio">
    <title>Prueba 3</title>
</head>
<body>
    <p>Código en <a href="https://github.com/quiqueruz/DWES/blob/main/ud1/prueba3.php">GitHub</a></p>
</body>
</html>