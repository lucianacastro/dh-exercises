<?php  
$funcionesEjecutadas = 0;
include 'funciones.php';
echo"<br>";
include 'superficie.php';

function mayorSuperficie($radioUno, $radioDos, $radioTres) {
	$superfCirculoUno = circulo($radioUno);
	$superfCirculoDos = circulo($radioDos);
	$superfCirculoTres = circulo($radioTres);
	$mayorCirc = max($superfCirculoUno, $superfCirculoDos, $superfCirculoTres);
	return $mayorCirc;
}

//si quiero saber que circulo es el de mayor superficie????
echo "el circulo de mayor superficie mide: ".mayorSuperficie(5, 15, 35);
//ejercicio 5 y 6
echo"<br>";
echo "Las funciones ejecutadas ascienden a: ".$funcionesEjecutadas;
echo"<br>";

//ejercicio 7

$frase = "Me encanta php, A Mi tambien me encanta php!";

echo "la posicion en la que aparece por primera vez la cadena php es: ".strpos($frase, "php").". <br>";

//ejercicio 8





?>