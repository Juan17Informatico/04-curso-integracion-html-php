<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inputs de tipo Arreglo</title>
</head>

<body>

    <form action="server.php" method="post" enctype="multipart/form-data">

        <!-- Inputs de tipo Arreglo -->
        <!-- <label>Personas</label> -->
        <!-- <input type="text" name="Personas[]" >
        <input type="text" name="Personas[]" >
        <input type="text" name="Personas[]" > -->

        <!-- Arreglos asociativos -->
        <!-- <p>Persona:</p>
        <label>Nombre</label>
        <input type="text" name="personas[nombre]" >
        <label>Email</label>
        <input type="email" name="personas[email]" >
        <label>Edad</label>
        <input type="number" name="personas[edad]" > -->

        <!-- CheckBox -->
        <!-- <label for="">Lista</label>
        <input type="checkbox" name="list1" >
        <input type="checkbox" name="list2" value="Este valor fue clicado" >
        <input type="checkbox" name="list3" > -->


        <!-- Radios -->
        <!-- <label for="mexico">Mexico</label>
        <input type="radio" name="pais" value="Mexico" id="mexico">
        <br>
        <label for="peru">Peru</label>
        <input type="radio" name="pais" value="Peru" id="peru">
        <br>

        <label for="ecuador">Ecuador</label>
        <input type="radio" name="pais" value="Ecuador" id="ecuador"> -->


        <!-- Multiples archivos -->
        <label for="galerias">Carga tus imagenes</label>
        <input type="file" name="galerias[]" id="galerias" multiple>

        <button type="submit">Enviar</button>
    </form>

</body>

</html>