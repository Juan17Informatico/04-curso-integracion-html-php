<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario por GET</title>
</head>

<body>

    <form action="../post/server.php" method="post">

        <label for="nombre">¿Cuál es tu nombre?</label>
        <input type="text" name="nombre" id="nombre">
    
        <label for="edad">¿Cuál es tu edad?</label>
        <input type="number" name="edad" id="edad">

        <button type="submit">Enviar</button>

    </form>

</body>

</html>