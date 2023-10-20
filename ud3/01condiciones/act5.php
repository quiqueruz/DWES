<?php
/**
 * Script que muestre una lista de enlaces en función del perfil de usuario:
 * Perfil Administrador: Pagina1, Pagina2, Pagina3, Pagina4
 * Perfil Usuario: Pagina1, Pagina2
 */
$perfil = "Usuario"
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="author " content="Enrique Ruz">
    <title>Actividad 5</title>
</head>

<body>
    <?php
    if ($perfil == "Administrador") {
        echo '<ul>';
            echo '<li><a href="https://www.youtube.com/?gl=ES&hl=es">Youtube</a></li>';
            echo '<li><a href="https://twitter.com/home?lang=es">Twitter</a></li>';
            echo '<li><a href="https://www.twitch.tv/">Twitch</a></li>';
            echo '<li><a href="https://kick.com/">Kick</a></li>';
        echo '</ul>';
    } elseif ($perfil == "Usuario") {
        echo '<ul>';
            echo '<li><a href="https://educacionadistancia.juntadeandalucia.es/centros/">Moodle</a></li>';
            echo '<li><a href="https://mail.google.com/mail/">Mail</a></li>';
        echo '</ul>';
    } else {
        echo 'No es un perfil apto';
    }
    ?>
</body>

</html>