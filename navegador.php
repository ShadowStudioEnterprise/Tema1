<?php
 $u_agent = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('/Firefox/i',$u_agent))
    echo "Hola";
else
   echo "Cambia a mozilla";

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
