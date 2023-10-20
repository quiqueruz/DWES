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