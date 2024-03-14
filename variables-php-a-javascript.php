<?php

$usuarios =  [
    [
        "id" => 0,
        "username" => "Mr.Michi"
    ],
    [
        "id" => 1,
        "username" => "Mr.Juan"
    ],    [
        "id" => 2,
        "username" => "Mr.Trufas"
    ],
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasar Variables de PHP a JavaScript</title>
</head>

<body>

    <script>
        let users = JSON.parse('<?= json_encode($usuarios) ?>');
        console.log(users);
    </script>


</body>

</html>