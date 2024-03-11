<?php

$nombre = "Mr JuanCM";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprim texto y etiqutas con PHP</title>
</head>

<body>
    <?php
    echo "<b>Hola, estoy aprendiendo a integrar PHP con HTML</b>";
    ?>

    <?= "<i>Italica soy yo</i>" ?>

    <h1>¡Hola <?= $nombre ?>!</h1>

</body>

</html>