<?php



echo "<pre>";
var_dump($_FILES);
echo "</pre>";

$basename = $_FILES["files"]["name"];
$rutaTemporal = $_FILES["files"]["tmp_name"];
$rutaUpload = "images/$basename";


move_uploaded_file($rutaTemporal, $rutaUpload);

echo $basename;

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <img src="<?=$rutaUpload?>" alt="<?=$basename?>">

</body>
</html>