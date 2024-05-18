<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
	@vite(['resources/css/estiloss.css',])
</head>
<body>
<div class="containerMod">
<h1 class="titleM">MODIFICAR "{{$juguete->Marca}}"</h1>
<form method="POST" action="/juguete/{{$juguete->id}}" id="formulario" class="">
	@csrf
	@method('patch')

	<div class="input-field">
		<label for="marca">Marca</label>
		<input type="text" name="Marca" id="Marca" value="{{$juguete->Marca}}">
	</div>
	<div class="input-field">
		<label for="marca">Precio</label>
		<input type="text" name="Precio" id="Precio" value="{{$juguete->Precio}}">
	</div>
	
	<div class="center-align">
		<input type="submit"  class="btn btn-large" name="action" value="enviar">
	</div>
</form>
</div>
</body>
</html>