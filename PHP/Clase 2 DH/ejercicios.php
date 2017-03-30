<!doctype html>
<html>
	<title></title>

	<body>
		<?php
		$varUno = 5;
		$varDos = 3;
		if($varUno > $varDos){
			echo "El numero mayor es $varUno";
		} elseif($varUno < $varDos) {
			echo "EL nnumero mayor es $varDos";
			} else {
				echo"Los numeros son iguales";
			}

		echo "<br>";

		$numAleatorio = rand(1, 5);
		if ($numAleatorio == 3 || $numAleatorio == 5) {
			echo $numAleatorio;
		} 
		echo "<br>";

		if ($numAleatorio != 3) {
			echo "El numero NO es 3";
		} else {
			echo $numAleatorio;
		}

		echo "<br>";

		$numUnoACien = rand(1, 100);
		if ($numUnoACien > 50) {
			echo "El numero es mayor a 50";
		} else {
			echo "El numero es menor a 50";
		}
		echo "<br>";

		//ejercicio 5

		$numUnoACienDos = rand(1, 100);
		if ($numUnoACienDos > 50 && $numUnoACienDos%2==0) {
			echo "El numero pasa la condicion";
		} elseif ($numUnoACienDos == 0){
				echo "El numero pasa la condicion";
			} else {
				echo "El numero NO pasa la condicion";
			}
		echo "<br>";

		//ejercicio 6
		$edad = 22;
		$casado = true;
		$sexo = "otro";

		echo "<br>";

		if ($edad > 18 && !$casado) {
			echo "Bienvenido";
		} else if ($sexo = "otro") {
			echo "Bienvenido";
		}

		echo "<br>";

		//ejercicio 7
		$cantidadDeAlumnos = 0;
		if ($cantidadDeAlumnos) {
			echo "true";
		} else {
			echo "false";
		}

		echo "<br>";
		//ejercicio 8
		if ($i = 0) {
			echo "true";
		} else {
			echo "false";
		}
		// ejercicio 9

		$numero = 6;
	
		echo ($numero % 2 == 0) ? "El numero es par" : "El numero es impar";

		echo "<br>";

		//ejercicio 10

		switch ($i = rand(1,5)) {
			case 1:
				echo "i es igual a ".$i;
				break;
			case 2:
				echo "i es igual a ".$i;
				break;
			case 3:
				echo "i es igual a ".$i;
				break;
			case 4:
				echo "i es igual a ".$i;
				break;
			case 5:
				echo "i es igual a ".$i;
				break;
			
			default:
				break;
		}

		echo "<br>";
		
		//ejercicio 11
		switch ($i = rand(1,5)) {
			case 1:
				echo "i es igual a ".$i;
				break;
			case 2:
				echo "i es igual a ".$i;
				break;
			
			default:
				echo "NO es igual a 1 o 2";
				break;
		}

		echo "<br>";


		$a = 2;
		$b = -4;

		if ($a<=>$b) {
			echo "hola!";
		}





		?>
	
	</body>
</html>