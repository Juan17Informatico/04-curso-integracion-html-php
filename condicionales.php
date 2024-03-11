<?php

$seHabloDeBruno = true;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>

<body>

    <h2>ESTO NO SE DEBE DE HACER</h2>
    <?php if ($seHabloDeBruno) {
        echo "<b>😮</b>";
    } else {
        echo "<b>😁</b>";
    } ?>


    <h2>Esto es aceptable</h2>
    <?php if ($seHabloDeBruno) { ?>
        <b>😮</b>
    <?php } else { ?>
        <b>😁</b>
    <?php } ?>

    <h1>Esto si deberías hacerlos</h1>
    <?php if($seHabloDeBruno):?>
        <b>😮</b>
    <?php else:  ?>

    <?php endif;?> 

</body>

</html>