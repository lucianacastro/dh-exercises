<?php 
function calculaEdad($fn) {
	echo "Fecha de nacimiento: ".$fn."<br>";
	$fn = explode("-", $fn);

	$anio_fn = $fn[0];
	$mes_fn = $fn[1];
	$dia_fn = $fn[2];

	$dia_actual = date('d');
	$mes_actual = date('m');
	$anio_actual = date('Y');

	$edad = $anio_actual - $anio_fn;

	if($mes_actual < $mes_fn) {
		$edad--;
	} elseif ($mes_actual == $mes_fn && $dia_actual < $dia_fn) {
		$edad--;
	}

	return $edad;
}
if (isset($_POST["anio"])) {
	$fechaNac = $_POST["anio"]."-".$_POST["mes"]."-".$_POST["dia"];
	echo "Tu edad es: ".calculaEdad($fechaNac);
}

?>