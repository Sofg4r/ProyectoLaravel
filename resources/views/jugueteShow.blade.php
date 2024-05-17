<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista de juguetes</title>
    @vite(['resources/css/estiloss.css',])
</head>
<body>
    <h1 class="title">VISTAS DE JUGUETES</h1>
    <p>{{$juguete->Marca}}</p>
    <p>{{$juguete->Precio}}</p>

    
    <a href="/juguete/{{$juguete->id}}/edit">Modificar</a>
    <form method="POST" action="/juguete/{{$juguete->id}}" id="formulario">
        @csrf
        @method('DELETE')
    <input type="submit" class="" name="action" value="Eliminar">
    </form>
</body>
</html>