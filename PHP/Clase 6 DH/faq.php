<?php
	$faq = [
		["pregunta" => "Cómo contactarnos?", "respuesta" => "Nuestro teléfono es: (011)4567-3455"],
		["pregunta" => "Cuánto es 3 + 2?", "respuesta" => "5"], ["pregunta" => "Por qué el cielo es azul?", "respuesta" => "Vaya a saber"], ["pregunta" => "Cual es el sentido de la vida?", "respuesta" => "42"]
	];
foreach ($faq as $key => $conjunto_pregunta) {
	$i = $key + 1;
	echo "Pregunta $i: ${conjunto_pregunta['pregunta']}<br>";
	echo "Respuesta $i: ${conjunto_pregunta['respuesta']}<br>";
}

?>