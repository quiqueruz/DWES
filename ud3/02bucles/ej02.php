<?php
/**
 * Sumar los 3 primeros números pares.
 * 
 * author: Enrique Ruz Del Río
 * date: 29/09/2023
 * 
 */
$num = 2;
$suma = 0;
$total_pares = 3;

for ($i=0; $i < $total_pares; $i++) {
    $suma += $num;
    $num += 2;
}

echo 'La suma de los ' . $total_pares . ' primeros pares es: ' . $suma;
?>