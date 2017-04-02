<!DOCTYPE HTML>
<html>
<header>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</header>
<body>


<div class="container">

<div class="jumbotron">
  <h1>Bienvenido a nuestro sitio!</h1>
 
</div>
<div class="panel panel-default">
  <div class="panel-body">
  <div class="row">
	<div class="col-md-6">
	<form action="imprimir.php" method="post">
	  <div class="form-group">
	    <label>Nombre</label>
	    <input type="text" name="nombre" class="form-control" placeholder="Ingrese su nombre">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Email</label>
	    <input type="email" name="email" class="form-control" placeholder="Ingrese su email">
	  </div>

	  <label>¿Cómo te enteraste de este sitio?</label>
	  <div class="checkbox">
       <label>
         <input type="checkbox" name="internet" value="internet"/>
    	Internet
       </label>
      </div>
      <div class="checkbox disabled">
       <label>
         <input type="checkbox" name="amigo" value="amigo"/>
    	Un amigo
       </label>
      </div>
      <div class="checkbox disabled">
       <label>
         <input type="checkbox" name="publicidad" value="publicidad"/>
    	Publicidad en medios de transporte
       </label>
      </div>
      
      <label>Sexo</label>
      <div class="radio">
       <label>
         <input type="radio" name="sexo" value="femenino">
         Femenino
         </label>
       </div>
      <div class="radio">
         <label>
         <input type="radio" name="sexo" value="masculino">
         Masculino
         </label>
      </div>

      <label>¿Cómo dormiste anoche?</label>
		<select name="como_dormiste"> 
			<? for ($i=0; $i <11 ; $i++): ?>
			<option value="<?= $i ?>"><?= $i ?></option>
			<? endfor ?>
		</select>
	<br>

	<label>Términos y condiciones</label>

	<div class="checkbox">
     <label>
       <input type="checkbox" name="terminos_condiciones">
    Acepto los términos y condiciones
  </label>
</div>

	  <p><a class="btn btn-primary btn-lg" href="#" role="button">Enviar</a></p>

	</form>
</div>
</div>
</div>

</div>
</div>


</body>
</html>

	