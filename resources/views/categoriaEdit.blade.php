<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
	@vite(['resources/css/estiloss.css',])
</head>
<body>
<div class="container" style="margin-top:10%;">
	<h1 class="title">MODIFICAR {{$categoria->categoria}}</h1>
	<form method="POST" action="/categoria/{{$categoria->id}}" id="formulario">
		@csrf
		@method('patch')
	
		<div class="container">
			<label for="categoria">Edad</label>
			<input type="text" name="Edad" id="Edad" value="{{$categoria->categoria}}"/>
		</div>
		<div class="center-align" style="margin-top: 30px;">
			<input type="submit" name="action" value="enviar" class="">
		</div>

	</form>
</div>
</body>
</html>