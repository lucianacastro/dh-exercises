<?php
//ejercicio 2) a.
function triangulo($base, $altura) {
	$superficieTriangulo = $base*$altura/2;
	return $superficieTriangulo;
}

echo "2) a. la superficie del triangulo es de: ".triangulo(3, 3)."<br>";

//ejercicio 2) b.
function rectangulo($base, $altura) {
	$superficieRectangulo = $base*$altura;
	return $superficieRectangulo;
}
echo "2) b. la superficie del rectangulo es de: ".rectangulo(3, 5)."<br>";

//ejercicio 2) c.

function cuadrado($base, $altura) {
	$superficieCuadrado = $base*$altura;
	return $superficieCuadrado;
}
echo "2) c. la superficie del cuadrado es de: ".cuadrado(5, 5)."<br>";

//ejercicio 2) d.
function circulo($radio) {
	$superficieCirculo = pi() * ($radio**2) /2;
	return $superficieCirculo;
}

echo "2) d. la superficie del circulo es de: ".circulo(10)."<br>";















?>