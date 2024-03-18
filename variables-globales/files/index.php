<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario por GET</title>
</head>

<body>

    <form action="server.php" method="post" enctype="multipart/form-data">

        <label for="nombre">¿Cuál es tu nombre?</label>
        <input type="text" name="nombre" id="nombre">

        <label for="files">Sube la imagen</label>
        <input type="file" name="files" id="files">

        <button type="submit">Enviar</button>

    </form>

</body>

</html>