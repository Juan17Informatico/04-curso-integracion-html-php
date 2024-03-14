<?php 

$usuarios = ["Juan", "Goku", "Gohan"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos</title>
</head>

<body>
    <ul>
        <?php for ($i = 0; $i < 5; $i++) : ?>
            <li><?= ($i + 1) ?></li>
        <?php endfor; ?>

        <?php while (false) : ?>

            <li>1</li>
        <?php endwhile; ?>


        <?php foreach ($usuarios as $usuario): ?>
            <li><?= $usuario ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>