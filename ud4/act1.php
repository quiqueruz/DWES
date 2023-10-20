<?php
/**
 * @author Quique Ruz
 * 
 */

$user = "";
$password = "";

if (isset($_COOKIE["user"])) {
    $user = $_COOKIE["user"];
    $password = $_COOKIE["password"];
}

if (isset($_POST["submit"])) {
    if (isset($_POST["remindMe"])) {
        setcookie("user", $_POST["user"], time()+3600);
        setcookie("password", $_POST["password"], time()+3600);
    }


}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Enrique Ruz Del Rio">
    <title>Ejercicio 1</title>
</head>
<body>
    <form action="" method="post">
        <label for="">User: </label>
        <input type="text" name="user" value="<?php echo $user; ?>">
        </br>
        <label for="">Password: </label>
        <input type="text" name="password" value="<?php echo $password; ?>">
        </br>
        <input type="checkbox" name="remindMe" id="remindMe">
        <label for="remindMe" name="remindMe">Remind Me</label>
        </br> 
        <input type="submit" name="submit">
    </form>
</body>
</html>