<!DOCTYPE html>
<html>
<body>
<?php
$nombre = array('Francisco','Andres','Carlos','Adrian','Nerea');
//Numero de nombre
echo("Longitud: ".count($nombre));
echo("<br>");
//string de nombres
echo (implode(" ",$nombre));
echo("<br>");
//String ordenada
$ordenada=$nombre;
asort($ordenada);
echo(implode(" ",$ordenada));
echo("<br>");
//orden inverso
$reverse=array_reverse($nombre,true);
echo(implode(" ",$reverse));
echo("<br>");
//Mi posicion
echo("Posicion: ".array_search('Francisco',$nombre));
echo("<br>");
//
 $alumnos = array('1' =>
 	array('id' => "1036359" ,'nombre'=>"Francisco",'edad'=>"23" ),
	'2'=>
  array('id' => "2313213" ,'nombre'=>"Carlos",'edad'=>"30" ),
	'3'=>
	array('id' => "545564" ,'nombre'=>"Saul",'edad'=>"19" ),
	'4'=>
  	array('id' => "446541" ,'nombre'=>"Nerea",'edad'=>"20")
);
echo "<table>";
echo "<tr>";
echo "  <th> ID  </th>";
echo "  <th> Nombre  </th>";
echo "  <th> Edad </th>";
echo "</tr>";
foreach ($alumnos as $key => $value) {
	echo "<tr>";
	foreach ($value as $key => $dades) {
		echo "<td>" . $dades . "</td> <td>" ;
	}
	echo "</tr>";
}

echo "</table>";
$columna=array_column($alumnos,"nombre")
print_r($alumnos)
$numeros=array(1,2,3,4,5,6,7,8,9,10);
print_r(array_sum($numeros));
?>
</body>
</html>
