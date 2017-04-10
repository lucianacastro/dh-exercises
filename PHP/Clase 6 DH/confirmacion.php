
<?php
$nombreCompleto = $_POST["name"]." ".$_POST["lastName"];
$edad = $_POST["age"];
$comida = $_POST["food"];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
Muchas gracias por registrarte <?php echo $nombreCompleto; ?>!<br>
Nos has dicho que tienes <?php echo $edad ?> años y como tu comida favorita es <?=$comida?>, lo tendremos en cuenta.


</body>
</html>




