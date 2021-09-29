<!DOCTYPE html>
<html>
<body>

<?php
$tabla = "alumnos";

$campos = array("nombre" => "Juan", "apellidos" => "Martínez");
//funcion ej1
function insert($tabla,array $campos){
	//Construyo la parte fija INSERT INTO ()
	$s= "insert into ".$tabla." (";
	//Convierto los campos a string
	$columna=array_keys($campos);
	$columna=implode(",",$columna);
    $s.=$columna.") values (";
	//Bucle para los valores
foreach($campos as $campo => $valor){
         $s.=":".$campo.",";
    }
		//Quitamos las comas y añadimos parentesis
    $s=substr($s,0,-1);
    $s.=")";
    return $s;
}
echo(insert($tabla,$campos));
//funcion ej2
function insertReferencia($tabla,array $campos,string &$s){
	//Convierto los campos a string
	$columna=array_keys($campos);
	$columna=implode(",",$columna);
    $s.=$columna.") values (";
		//Bucle con los referencias
foreach($campos as $campo => $valor){
         $s.=$valor.",";
    }
		//Quitamos las comas y añadimos parentesis
    $s=substr($s,0,-1);
    $s.=")";

}
//Construyo la setencia SQL
$s= "insert into ".$tabla." (";
insertReferencia($tabla,$campos,$s);
echo $s;

//Ejercicio 3

$campos2 = array("id" => 1, "nombre" => "Juan", "apellidos" => "Martínez");
function update($tabla,array $campos,&$s){
	$id= array_keys($campos)[0]."=:".array_keys($campos)[0];
    $count=0;
		//Bucle con los referencias
foreach($campos as $campo => $valor){
		if($count!=0)
        	$s.=":$campo"."=:".$campo.",";
    	$count++;
    }
		//Quitamos las comas y añadimos parentesis
    $s=substr($s,0,-1);
    $s.=" WHERE ".$id;
}
//Construyo la setencia SQL
$s= "UPDATE ".$tabla." SET (";
update($tabla,$campos2,$s);
echo($s);
//Ejercicio 4
$operaciones = function ($num1,$num2,$operador){
     switch ($operador) {
        case 's':
            $valor = $num1 + $num2;
            $s=$num1." "."+"." ".$num2." = ".$valor;
            break;
        case 'r':
            $valor = $num1 - $num2;
            $s=$num1." "."-"." ".$num2." = ".$valor;
            break;
        case 'm':
            $valor = $num1 * $num2;
            $s=$num1." "."*"." ".$num2." = ".$valor;
            break;
        case 'd':
            $valor = $num1 / $num2;
            $s=$num1." "."/"." ".$num2." = ".$valor;
            break;

    }
    return $s;
};
echo ($operaciones(3,3,"s"));
?>
</body>
</html>
