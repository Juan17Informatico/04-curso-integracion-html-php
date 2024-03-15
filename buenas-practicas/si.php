<?php

$tablaDel9 = [];

for ($i = 1; $i <= 10; $i++) {

    $resultado = 9 * $i;
    $texto = "9 X $i = ";
    $tablaDel9[] =  $texto . $resultado;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No hagas esto</title>
</head>

<body>

    <h1>Tabla del 9</h1>
    <ul>
        <?php foreach ($tablaDel9 as $result) : ?>
            <li><?= $result ?></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>