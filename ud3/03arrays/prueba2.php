<?php
/**
 * Crea un script que defina un array de números enteros y utilizando una función
 * anónima genere un array con el cuadrado de los mismos
 * 
 */

$numerosEnteros = array(1, 2, 3, 4, 5);
$numerosCuadrados = array_map(function($n){return $n*$n;}, $numerosEnteros);
print_r($numerosEnteros);
echo '<br/>';
print_r($numerosCuadrados);
?>