<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitizando datos</title>
</head>

<body>


    <form action="server.php" method="post">


        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <label for="username">UserName: </label>
        <input type="text" name="username" id="username">

        <br>

        <label for="correo">Correo: </label>
        <input type="mail" name="correo" id="correo">
        <br>

        <label for="edad">Edad: </label>
        <input type="number" name="edad" id="edad">

        <br>

        <button type="submit">Enviar form</button>

    </form>

</body>

</html>