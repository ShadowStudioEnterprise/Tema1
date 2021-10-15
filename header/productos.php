<?php
//Get array
$productos = ["1" => "Producto 1", "2" => "Producto 2", "3" => "Producto 3"];
$n = $_GET["id"]??"1";
if(!array_key_exists($n,$array)){
  http_response_code(404);
}

 ?>


<!doctype html>

<html lang="es">

<head>

    <meta charset="utf-8">

    <title>Prueba</title>
 	<meta name="author" content="Francisco Navarrete">

</head>

<body>



</body>

</html>
