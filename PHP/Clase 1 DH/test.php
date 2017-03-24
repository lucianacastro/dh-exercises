<!doctype html>
<html>
	<title></title>

	<body>
		<?php  
			$dia = date("D");
			if ($dia == "Thu") {
				echo "Hoy es jueves";
			}
			?>
		<?php 
			echo "<br>";
			echo "punto a): "; 
			$numero_entero = 12;
			echo $numero_entero;
			var_dump($numero_entero);
			echo "<br>";
			
			echo "punto b): ";
			var_dump($numero_entero);
			echo "<br>";
			echo "punto c): ";
			$numero_decimal = 2.5;
			echo $numero_decimal;
			var_dump($numero_decimal);
			echo "<br>";

			echo "punto d): ";
			var_dump($numero_decimal);
			echo "<br>";
			
			echo "punto e): ";
			$caracter = "!";
			echo $caracter;
			var_dump($caracter);
			echo "<br>";
			
			echo "punto f): ";
			$caracter_dos = 'e';
			echo $caracter_dos;
			var_dump($caracter_dos);
			echo "<br>";
			
			echo "punto g): ";
			$mi_string = 'hola gente';
			echo $mi_string;
			echo "<br>";
			
			echo "punto h): ";
			$mi_segundo_string = "¿como estan?";
			echo $mi_segundo_string;
			var_dump($mi_segundo_string);
			echo "<br>";
			
			echo "punto i): ";
			$numero_entero = "doce";
			var_dump($numero_entero);
			echo "<br>";

			echo "punto j): ";
			$mi_string = 1.2;
			var_dump($mi_string);
			echo "<br>";

			$uno = "tres";
			$dos = "tristes";
			$tres = "tigres";
			$cuatro = "tragan";
			$cinco = "trigo";
			$seis = "en";
			$siete = "un";
			$ocho = "trigal";

			echo $uno." gatitos ".$cuatro." ".$siete. "a lata de atun";
			echo "<br>";

			/* ejercicio 3*/
			$variable01 = true;
			$variable02 = false;
			$variable03 = 0;
			$variable04 = 1;
			$variable05 = 6;
			$variable06 = '';
			$variable07 = "3";
			$variable08 = "true";
			$variable09 = 'false';
			$variable10 = null;


			function tipoDato($varN)
			{
				if ( $varN == true )
				{
					echo 'el valor' . $varN . 'es verdadero.';
				}
				else
				{
					echo 'el valor' . $varN . 'es falso.';
				}
			}

			tipoDato($variable06); 

		/** ejercicio 4**/
		echo "<br>";
		$miArray = ["gato", "perro", "topo", "sapo", "mono"];
		var_dump($miArray);
		echo "<br>";
		$miArray[] = "cocodrilo";
		$miArray[] = "serpiente";
		echo"<pre>";
		var_dump($miArray);
		echo "<br>";

		/*Punto 4 b)*/
		/*con for each:*/
		$miFrase = "Me gustan los animales: ".$miArray[0];
		for ($i=1; $i < count($miArray); $i++) { 
			$miFrase .= ", ".$miArray[$i];
		};
		echo $miFrase;
		
		echo"<br>";

		$miFrase = "Me gustan los animales: ";
		foreach ($miArray as $i => $value) {
			if ($i == 0) {
				$miFrase .= $value;
			} else {
				$miFrase = $miFrase.", ".$value;
			}
		};

		echo $miFrase.".";
		echo"<br>";

		/*con implode*/
		echo "Me gustan los animales: ".implode(", ", $miArray).".";
		echo"<br>";

		//punto 4 c)
		$miArray[0] = "tortuga";
		var_dump($miArray);
		echo"<br>";

		//punto 4 d)
		$miArray[100] = "pez";
		var_dump($miArray);
		echo"<br>";

		//punto e
		$miArray[16] = "hormiga";
		var_dump($miArray);
		echo"<br>";

		//punto 5:
		echo"punto 5";
		echo "<br>";

		//a)

		$auto = [];
		$auto["marca"] = ["ford"];
		$auto["modelo"] = ["punto"];
		$auto["color"] = ["red"];
		$auto["anio"] = [2000];
		$auto["patente"] = ["okv342"];

		var_dump($auto);
		echo("<br>");
		//a)
		$auto[0] = ["Carlos Perez"];
		var_dump($auto);
		echo("<br>");
		//b)
		$auto[14] = ["La Segunda"];
		var_dump($auto);
		echo("<br>");
		//c)
		$auto["poliza"] = [123456];
		var_dump($auto);
		echo("<br>");
		//a=d)
		$auto[0] = ["Juan Carloto"];
		var_dump($auto);
		echo("<br>");

	//punto 6
		echo"punto 6";
		echo("<br>");
		//a)
		$entero = 10;
		$decimal = 5.5;
		echo $entero + $decimal;
		echo("<br>");

		//b)
		echo $entero - $decimal;
		echo("<br>");

		//c)
		echo $entero / $decimal;
		echo("<br>");

		//d)
		echo $entero * $decimal;
		echo("<br>");

		//e)
		$resto = $entero % $decimal;
		echo $resto;
		echo("<br>");

		//f)
		$entero+= 1;
		$decimal+= 1;
		echo $entero;
		echo("<br>");
		echo $decimal;
		echo("<br>");

		//g
		$entero+= 5;
		$decimal-= 0.6;
		echo $entero;
		echo("<br>");
		echo $decimal;
		echo("<br>");	

		//h
		$resultado = (($entero *2) + $decimal) / ($entero /2);	
		echo $resultado;
		echo("<br>");

		//punto 7
		echo"punto 7";
		echo"<br>";

		$var_uno = "Hola";
		$var_dos = "mundo!";

		//punto a)
		$frase_unida = $var_uno." ".$var_dos;
		echo $frase_unida;
		echo"<br>";
		//punto b)
		$frase_completa = $frase_unida." Que bueno esta PHP";
		echo $frase_completa;








		?>
	</body>


</html>