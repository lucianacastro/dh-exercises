<?php
var_dump($_POST);

var_dump($_POST["nombre"]);

echo "<br>";

foreach ($_POST as $key => $value) {
 	echo $value."<br>";
 } 

echo "<br>";
var_dump (getAllHeaders());
echo "<br>";
echo "<br>";

foreach (getallheaders() as $key => $value) {
	echo $value."<br>";
}
echo "<br>";
var_dump($_COOKIE);

?>

<br>
<br>
<!DOCTYPE HTML>
<html>
<body>
	<form action="imprimir.php" method="post">
	Nombre: <input type="text" name="nombre"><br>
	E-mail: <input type="text" name="email"><br>
	
	<br>
	¿Cómo te enteraste de este sitio?
	<br>
		<input type="checkbox" name="internet"/> Internet
	<br>
		<input type="checkbox" name="amigo"/> Un amigo
	<br>
		<input type="checkbox" name="publicidad"/> Publicidad en medios de transporte
	<br>
	<br>
	
	Sexo
	<br>
	<br>
		<input type="radio" name="sexo" value="femenino" /> Femenino
		<input type="radio" name="sexo" value="masculino" /> Masculino
	
	<br>
	<br>
	¿Cómo dormiste anoche?
		<select name="como_dormiste"> 
			<? for ($i=0; $i <11 ; $i++): ?>
			<option value="<?= $i ?>"><?= $i ?></option>
			<? endfor ?>
		</select>
	<br>
	<br>
	<u>Términos y condiciones</u>
	<br>
	<input type="checkbox" name="terminos_condiciones"/> Acepto los términos y condiciones
	<br>
	<br>
	<input type="submit">
	
		
	</form>





</body>
</html>