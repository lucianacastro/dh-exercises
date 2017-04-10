<?php $comidas = ["ñoquis", "asado", "milanesas con papas fritas", "tarta de verdura", "pizza", "haburguesas"];

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div class="main-container">
	<form <?if(isset($_POST)):?> action="registro_usuarios.php"<?elseif: action="registro_usuarios.php"
	?> method="post">
		<fieldset>
			<h1>Sign up!</h1>

			<label>Nombre</label>
			<input type="text" name="name" value="<?= @$_POST["name"] ?>" required /><br>

			<label>Apellido</label>
			<input type="text" name="lastName" value="<?+ @$_POST["lastName"]?>" required/><br>

			<label>Edad</label>
			<input type="number" name="age" value="<?+ @$_POST["age"]?>"/><br>

			<label>Sexo</label><br>
			<input type="radio" name="gender" value="male"/>Male<br>
			<input type="radio" name="gender" value="female"/>Female<br>

			<label>E-mail</label>
			<input type="email" name="email" value="<?+ @$_POST["email"]?>"required/><br>

			<label>Indícanos cuál es tu comida favorita</label>
			<select name="food">
				<? for ($i = 0; $i < count($comidas); $i++): ?>
				<option <?= @$_POST["food"]==$comidas[$i]?"selected":"" ?> value="<?=$comidas[$i]?>"><?=$comidas[$i]?></option>
				<?endfor?>
			</select><br>



			<input type="submit" name="enviar">
		










		</fieldset>
	</form>
</div>

</body>
</html>