ejercicio 2

<?php
$colores = array('Blanco', 'Verde', 'Rojo');

echo"<ul>";
foreach ($colores as $color) {
	echo "<li>".$color."</li><br>";
}
echo "</ul>";

?>

ejercicio 3

<?php
$colores = array('Blanco' => 'FFFFFF', 'Verde' => '1DE80A', 'Rojo' => 'FA0202');

echo"<ul>";

foreach ($colores as $color => $value) {
	echo "<li style='color:$value'>".$color."</li><br>";
}
echo "</ul>";

?>

<?php

$articulos = array('articulo A' => 23421, 'articulo B' => 423, 'articulo C' => 500);


echo'<table>';
foreach ($articulos as $articulo => $precio) {
	echo '<tr><td> Costo '.$articulo.' </td><td> $'.$precio.' </td></tr>';
}
echo'</table>'
?>