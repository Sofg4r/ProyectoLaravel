<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista de juguetes</title>
    @vite(['resources/css/estiloss.css',])
</head>
<body>
<div class="container">
        <h1 class="title">VISTA DE JUGUETES</h1>
        <div class="info">
            <p><strong>Marca:</strong> {{$juguete->Marca}}</p>
            <p><strong>Precio:</strong> {{$juguete->Precio}}</p>
</div>

        <div class="buttons">
    <a href="/juguete/{{$juguete->id}}/edit">Modificar</a>
    <br>
    <form method="POST" action="/juguete/{{$juguete->id}}" id="formulario">
        <br>
        @csrf
        @method('DELETE')
    <button type="submit" class="btn btn-delete">Eliminar</button>
    </form>
    </div>
    </div>
</body>
</html>