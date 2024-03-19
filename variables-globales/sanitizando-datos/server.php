<?php


$username = $_POST["username"];
$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$correo = $_POST["correo"];

$htmlen = htmlentities($nombre);
$usersaniti = addslashes($username);
$onlywords = preg_replace("/\d/", "", $username);
$onlynumber = preg_replace("/\D/", "", $username);
$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
$sanitze_int = filter_var($edad, FILTER_SANITIZE_NUMBER_INT);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de mi usuario</title>
</head>

<body>

    <p>Username:</p>
    <?= $usersaniti ?>

    <p>name</p>
    <?= $htmlen ?>


    <p>Username sin numeros</p>
    <?= $onlywords ?>


    <p>Username sin letras</p>
    <?= $onlynumber ?>


    <p>Email:</p>
    <?= $correo ?>

    <p>Edad:</p>
    <?= $sanitze_int ?>

</body>

</html>