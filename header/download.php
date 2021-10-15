<?php
$filename = $_GET['path'];
header("Content-Type:aplication/zip");
header("Content-Lenghth". filesize($filename))
header('Content-Disposition: attachment; filename="'.basename($filename).'"')
for ($i=0; $i < ; $i++) {
  echo str_repeat(".",1000);
  unsleep(50000);
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
