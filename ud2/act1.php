<?php
/**
 * Script que muestre el mensaje Hola Mundo entrecomillado.
 * 
 * @author Quique Ruz
 */
$mensaje = "Hola Mundo";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Enrique Ruz Del Rio">
    <title>Actividad 1</title>
</head>
<body>
    <p>1. Script que muestre el mensaje Hola Mundo entrecomillado.</p>
    <h1><?php echo '"' . $mensaje . '"'?></h1>
    <p>Código en <a href="https://github.com/quiqueruz/DWES/blob/main/ud2/act1.php">GitHub</a></p>
</body>
</html>