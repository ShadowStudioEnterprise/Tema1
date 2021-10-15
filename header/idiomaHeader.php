<?php

    $langBrw= substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $acceptLang = ['de','es','ca']; 
    $lang = in_array($langBrw, $acceptLang) ? $lang : 'en';
	
    if ($lang == "en"){

        $content = "This page is in English";

        $title = "En ingles";

    }else{
    	 if ($lang == "ca"){
    	 $content= "Català";
    	 $title = "En Català";
    	 }else{

        $content = "Esta página está en Castellano (Idioma por defecto)";

        $title = "En Castellano";
		}
    }

?>

<!doctype html>

<html lang="es">

<head>

    <meta charset="utf-8">

    <title><?= $title ?></title>

    <meta name="author" content="Francisco Navarrete">

</head>

<body>

    <?= $content ?>

</body>

</html>
