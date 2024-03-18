<?php

echo "<pre>";
var_dump($_FILES);
echo "</pre>";

$basename = $_FILES["files"]["name"];

echo $basename;