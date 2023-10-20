<?php
$aPaises = array(
    array('id' => 'es', 'pais'=> 'España', 'capital' => 'Madrid'),
    array('id' => 'it', 'pais'=> 'Italia', 'capital' => 'Roma'),
    array('id' => 'fr', 'pais'=> 'Francia', 'capital' => 'París'),
);

// Obtener un array con los países.

// Opción 1
echo '<strong>Opción 1</strong><br/>';
$nombrePaises = array();
foreach ($aPaises as $pais) {
    $nombrePaises[] = $pais['pais'];
};

print_r($nombrePaises);
echo '<br/>';

/*
foreach ($nombrePaises as $key => $value) {
    echo $key . ': ' . $value;
    echo '<br/>';
};
*/

// Opción 2
echo '<strong>Opción 2</strong><br/>';
$nombrePaises = array_map(function ($pais) {
    return $pais['pais'];
}, $aPaises);
print_r($nombrePaises);
?>