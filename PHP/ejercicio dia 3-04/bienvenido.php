<form method="post" action="calcular.php">

	<label>Dia</label>
	<select name="dia">
	
	<?php for ($i = 0; $i<= 31; $i++) {
		echo "<option value='".$i."'>".$i."</option>";
	}
?>
	</select>

	<label>Mes</label>
	<select name="mes">
		<?php for ($i = 0; $i<= 12; $i++) {
		echo "<option value='".$i."'>".$i."</option>";
	}
?>

	</select>

<label>Año</label>
	<select name="anio">
		<?php for ($i = date('Y'); $i> 1900; $i--) {
		echo "<option value='".$i."'>".$i."</option>";
	}
?>
</select>
<br>
<br>
<input type="submit" value="Enviar" />

</form>



	

