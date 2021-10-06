<!DOCTYPE html>
<html>
<body>

<?php
$nombre = $_GET["nombre"]??"Francisco";
echo trim($nombre, "/" );
echo "<br>";
echo "Longitud: ".strlen($nombre);
echo "<br>";
echo strtoupper($nombre);
echo "<br>";
echo strtolower($nombre);
echo "<br>";
$nombrePre = $_GET["preN"]??"Fran";
if(strpos($nombre, $nombrePre)!==false){
  echo "empieza por ".$nombrePre;
}
echo "<br>";
echo "Tiene ".substr_count(strtolower($nombre),"a");
echo "<br>";
if(stripos($nombre,"a")!==false) echo "Tiene: ".stripos($nombre,"a"); else echo "No hay";
echo "<br>";
echo str_ireplace("o","0",$nombre);
echo "<br>";
$url = "http://username:password@hostname:9090/path?arg=value";
echo "Protocolo: ".parse_url($url, PHP_URL_SCHEME);
echo "<br>";
echo "Usuario: ".parse_url($url, PHP_URL_USER);
echo "<br>";
echo "Path: ".parse_url($url, PHP_URL_PATH);
echo "<br>";
echo "Args:".parse_url($url, PHP_URL_QUERY);
echo "<br>";
?>
?>

</body>
</html>
