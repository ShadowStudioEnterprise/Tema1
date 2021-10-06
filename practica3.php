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
//Columna nombre
$columna=array_column($alumnos,"nombre")
print_r($alumnos)
//suma numeros
$numeros=array(1,2,3,4,5,6,7,8,9,10);
print_r(array_sum($numeros));
//rand password
function rand_Pass($upper, $lower , $numeric, $other ){
  $arrayPwsd=array_merge(randC($upper,65,90),randC($lower,97,122),randC($numeric,48,57),randC($other,32,47));
  shuffle($arrayPwsd);
  return $arrayPwsd;
}
function randC($lenghth,$low,$high){
  for ($i=0; $i < $lenghth; $i++) {
    $arrays[$i]=chr(rand($low,$high));
  }
  return($arrays);
}
echo implode(rand_Pass(1,3,5,2));
//MAX MIN

$strlength=array_map("strlen",
  array("adasda",
      "asdasdasd",
      "asdasdasdasdasdasd",
      "asd",
      "asdadsasdasdasdasdasdasdasdad"));
echo "Long max: ".max($strlength)."<br> Long min: " .min($strlength);

//partlist
$test = array("hola","soy", "tu", "amigo", "Spiderman");
function partlist($stringA) {
$arrayt = [];
  for ($i=0; $i < count($stringA)-1; $i++) {
    $arrayt[]=[implode(array_slice($stringA,0,$i+1)),implode(array_slice($stringA,$i+1))];
    }
    return $arrayt;
  }
print_r(partlist($test));
//filtros
$contactos = array(
        array("codigo" => 1, "nombre" => "Juan Pérez",
        "telefono" => "966112233", "email" => "juanp@gmail.com"),
        array("codigo" => 2, "nombre" => "Ana López",
        "telefono" => "965667788", "email" => "anita@hotmail.com"),
        array("codigo" => 3, "nombre" => "Mario Montero",
        "telefono" => "965929190", "email" => "mario.mont@gmail.com"),
        array("codigo" => 4, "nombre" => "Laura Martínez",
        "telefono" => "611223344", "email" => "lm2000@gmail.com"),
        array("codigo" => 5, "nombre" => "Nora Jover",
        "telefono" => "638765432", "email" => "norajover@hotmail.com"),
        );
$filterBy = strtolower($_GET["filtrarPor"] ?? "hotmail.com");
$filtered = array_filter($contactos, 
        function($contacto) use ($filtrarPor){
            return strpos(strtolower($contacto["email"]), $filtrarPor) !== FALSE;

        });
print_r($filtered);
?>

</body>
</html>
