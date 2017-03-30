<!doctype html>
<html>
	<title></title>

	<body>
		<?php  
		for($i=1; $i <= 100; $i++) {
			echo $i ."<br>";
		}

		//ejercicio 2
		$random = rand(0,100);
		for($i=1; $i <$random; $i++) {
			echo $i ."<br>";
		}

		//ejercicio 3

		for($i=1; $i > 0 && $i <= 10; $i++) {
			echo ($i*2) ."<br>";
		}

		//ejercicio 4

		$cantidad = 0;
		$cara = 0;

		while ( $cara < 5) {
			$moneda = rand(0,1);
			if ($moneda == 1) {
				$cara++;
				$cantidad++;
			} else {
				$cantidad ++;
			}
		}
		echo "cantidad de caras obtenidas: ".$cara;
		echo "<br>";
		echo "cantidad de veces que se tiro la moneda: ".$cantidad;
		echo "<br>";

		//ejercicio 5

		$cantidad = 0;

		do {
			$moneda = rand(0,1);
			$cantidad++;
		} while ($moneda != 1);
	
		echo "cantidad de veces que se tiro la moneda: ".$cantidad;
		echo "<br>";

		//ejercicio 6

		//con for:
		$nombres = ["Juan", "Rosa", "Jose", "Mateo", "Luna"];

		for ($i=0; $i < count($nombres); $i++) { 
			echo $nombres[$i];
		}
		echo "<br>";
		
		//con while:
		$i = 0;
		while ($i < count($nombres)) {
			echo $nombres[$i];
			$i++;
		}
		echo "<br>";

		//con do/wile:

		$i = 0;
		do {
			echo $nombres[$i];
			$i++;
		} while ( $i < count($nombres));
		echo "<br>";

		//ejercicio 7
		//con for:

		$arrayAleatorios = [rand(0,10), rand(0,10), rand(0,10), rand(0,10), rand(0,10), rand(0,10), rand(0,10), rand(0,10), rand(0,10), rand(0,10)];

		for ($i=0; $i < count($arrayAleatorios) ; $i++) { 
			echo $arrayAleatorios[$i];
			if ($arrayAleatorios[$i] == 5) {
				echo "Se encontro un 5!";
				break;
			}
		}
		echo "<br>";

		//con while:

		$i = 0;
		while ($i < count($arrayAleatorios)) {
			echo $arrayAleatorios[$i];
			if ($arrayAleatorios[$i] == 5) {
				echo "se encontro un 5";
				break;
			}
			$i++;
		}
		echo "<br>";

		//con do/while:

		$i = 0;
		do{
			echo $arrayAleatorios[$i];
			$i++;
			if ($arrayAleatorios[$i] == 5) {
				echo "se encontro un 5!";
				break;
			}
		} while($i < count($arrayAleatorios));
		echo "<br>";

		//ejercicio 8

		foreach (range('a','o') as $i => $letter) {
			$arrLetters[] = $letter;
			
			echo "En la posición ".$i." se encuentra el valor ".$letter;
			echo "<br>";
		}


		//ejercicio 9

		$mascota = [
			"animal" => "gato",
			"edad" => 2,
			"altura" => "40 cm",
			"nombre" => "Mao",
		];

		var_dump($mascota);
		echo "<br>";

		//ejercicio 10
		foreach ($mascota as $key => $value) {
			echo $key.": ".$value;
			echo "<br>";			
		}

		//ejercicio 11

		$ceu = array( "Italia"=>"Roma", "Luxembourg"=>"Luxembourg", "Bélgica"=> "Bruselas", "Dinamarca"=>"Copenhagen", "Finlandia"=>"Helsinki", "Francia" => "Paris", "Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemania" => "Berlin", "Grecia" => "Athenas", "Irlanda"=>"Dublin", "Holanda"=>"Amsterdam", "Portugal"=>"Lisbon", "España"=>"Madrid", "Suecia"=>"Stockholm", "Reino Unido"=>"London", "Chipre"=>"Nicosia", "Lithuania"=>"Vilnius", "Republica Checa"=>"Prague", "Estonia"=>"Tallin", "Hungría"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valletta", "Austria" => "Vienna", "Polonia"=>"Warsaw") ;


		$ceu []= ksort($ceu);

		var_dump($ceu);

		echo "<br>";

		foreach ($ceu as $key => $value) {
			echo "La capital de ".$key." es ".$value.".";
			echo "<br>";
		}

		//ejercicio 12
		$ceu = [
		"Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"], "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"], "Colombia" => ["Cartagena", "Bogota", "Barranquilla"], "Francia" => ["Paris", "Nantes", "Lyon"], "Italia" => ["Roma", "Milan", "Venecia"], "Alemania" => ["Munich", "Berlin", "Frankfurt"]
		];

		foreach ($ceu as $pais => $ciudades) {
			echo "Las ciudades de ".$pais." son:";
			echo "<br>";
			echo "<ul>";
			foreach ($ciudades as $ciudad) {
				
				echo "<li> ".$ciudad."</li>";
			}
			echo "</ul>";
			echo "<br>";
		}

		//ejercicio 13
		echo"<pre>";
		$ceu["Argentina"] = [ "ciudades" => $ceu["Argentina"],  "esAmericano" => true];
		$ceu["Brasil"] = [ "ciudades" => $ceu["Brasil"],  "esAmericano" => true];
		$ceu["Colombia"] = [ "ciudades" => $ceu["Colombia"],  "esAmericano" => true];
		$ceu["Francia"] = [ "ciudades" => $ceu["Francia"],  "esAmericano" => false];
		$ceu["Italia"] = [ "ciudades" => $ceu["Italia"],  "esAmericano" => false];		
		$ceu["Alemania"] = [ "ciudades" => $ceu["Alemania"],  "esAmericano" => false];	

		var_dump($ceu);

		echo"<br>";
	
			
		foreach ($ceu as $nombrePais => $info) {
			
			if ($info["esAmericano"]) {
				echo "Las ciudades de ".$nombrePais." son:";
				echo "<br>";
				echo "<ul>";
				foreach ($info["ciudades"] as $ciudad) {
					echo "<li> ".$ciudad."</li>";
				}
			}
			echo "</ul>";
			echo "<br>";
		}
			
	





		




		


		?>
	</body>


</html>