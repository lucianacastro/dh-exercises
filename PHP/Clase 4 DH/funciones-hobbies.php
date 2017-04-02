<?php

function hobbyValido($hobby){

	if(strlen($hobby) < 15 && strlen($hobby) > 3) {
		return true;
	} else {
		return false;
	}
}


function confirmarHobby($hobby) {
	$respuesta = readline("Usted confirma que le gusta ".$hobby."?");
	if ("si" == $respuesta || "SI" == $respuesta) {
		return true;
	} else {
		return false;
	}
}


?>