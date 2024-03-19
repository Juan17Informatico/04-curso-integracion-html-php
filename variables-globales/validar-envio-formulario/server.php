<?php



// if (isset($_POST["nombre"]) && !empty($_POST["nombre"])) {

//     $nombre = $_POST["nombre"];

//     echo "!Hola $nombre! 😎";
// } else {

//     echo "No enviaste nada 🙄";
// }


if(isset($_POST["form"])){
    echo "todo el formulario fue mandado"; 
}else{
    echo "No enviaste nada"; 
}