<?php 
echo "Hola mundo";

$nombre = readline("Por favor ingrese su nombre: ");
echo "Bienvenido ".$nombre;

$edad = intval(readline(" Ingrese su edad "));
if ($edad < 18) {
	echo "Usted no está autorizado en el sistema\n";
} else {
	echo "Autorización exitosa\n";
}


$hobbies = readline("Ingrese sus hobbies separados por coma: ");

$listaHobbies = array_map(trim, explode("," , $hobbies));

$listaHobbiesConfirmados = [];

include("funciones-hobbies.php");

foreach ($listaHobbies as $hobby) {
	if(hobbyValido($hobby) && confirmarHobby($hobby)) {
		$listaHobbiesConfirmados[] = $hobby;
	} 
}

echo "nombre: ".$nombre."\n";
echo "Edad: ".$edad."\n";
echo "Hobbies: ".implode(", " , $listaHobbiesConfirmados)."\n";




?>