<?php
    /**
     * Script de formulario
     * 
     * @author Quique Ruz
     */

     $info = array("nombre", "apellidos");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Enrique Ruz">
    <title>Enrique Ruz Del Río</title>
</head>
<body>
    <form action="procesa_formulario3.php" method="post">
        <?php
            foreach ($info as $value) {
                echo '<input type="text" name="' . $value . '" placeholder="' . $value . '" value=""/>';
                echo '<br/>';
            }
        ?>
        <input type="submit" name="enviar"/>
    </form>
</body>
</html>