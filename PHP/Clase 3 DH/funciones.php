<?php
$numeroMagico = 5;

//ejercicio 1) a. y c.
function mayor($numUno, $numDos, $numTres = NULL) {
global $numeroMagico;
if ($numUno > $numDos) {
	$max = $numUno;
	
	} else {
		$max =$numDos;
	} 

if (isset($numTres)) {
	if ($max > $numTres) {
		echo $max;
		return $max;
	} else {
		echo $numTres;
		return $numTres;
		}
	} else {
		if ($max > $numeroMagico) {
			echo $max;
			return $max;
		} else {
		echo $numeroMagico;
		return $numeroMagico;
		}
	}
	
}
echo "resultado ejercicio 1) a.: "; mayor(2, 3); echo "<br>";

//ejercicio 2) b.

function tabla($base, $limite) {
	$listaNum = [];
	for ($i=$base; $i <=$limite ; $i++) { 
		$listaNum[] = $i;
	}
	echo "<pre>";
	var_dump($listaNum); 
	return $listaNum;
}

tabla(5,10);
echo"<br>";

//ejercicio 1.d)

function mayorDos($numUno, $numDos, $numTres = NULL) {
global $numeroMagico;
if (isset($numTres)) {
	if ($numUno > $numDos) {
		$max = $numUno;
		} else {
			$max =$numDos;
		} 

	if ($max > $numTres) {
		echo $max;
		return $max;
		} else {
		echo $numTres;
		return $numTres;
		}

	} else {
		if ($numUno > $numDos) {
			$max = $numUno;
		} else {
			$max = $numDos;
		}	
		if ($max > $numeroMagico) {
			echo $max;
			return $max;
		} else {
			echo $numeroMagico;
			return $numeroMagico;
		}
	}
}
echo "resultado ejercicio 1) d.: "; mayorDos(8, 3, 2); echo"<br>";

//ejercicio 1) e.
function tablaDos($base, $limite = NULL) {
	global $numeroMagico;
	$listaNum = [];
	if (isset($limite)){
		for ($i=$base; $i <=$limite ; $i++) { 
		$listaNum[] = $i;
		}
	} else {
		for ($i=$base; $i <=$numeroMagico ; $i++) { 
		$listaNum[] = $i;
		}
	}
	
	echo "<pre>";
	var_dump($listaNum); 
	return $listaNum;
}
echo "resultado ejercicio 1) e.: ";
tablaDos(3);
echo"<br>";










?>