<?php
// Cargar el fichero PHP
include 'config/config.php';

// Cargar datos
$nombre = $datos['nombre'];
$apellidos = $datos['apellidos'];
$foto = $datos['foto'];
$catprofesional = $datos['catprofesional'];
$email = $datos['email'];
$phone = $datos['telefono'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Enrique Ruz">
    <title>Enrique Ruz Del Río</title>
</head>
<body>
    <div>
        <h1><?php echo "$nombre $apellidos" ?></h1>
        <h2><?php echo "$catprofesional"?></h2>

        <ul class="enlaces">
            <li>Mail: <?php echo $email;?></li>
            <li>Phone: <?php echo $phone?></li>     
        </ul>  
    </div>
</body>
</html>