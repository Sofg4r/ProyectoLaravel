<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrearJuguete</title>
    @vite(['resources/css/estiloss.css',])
</head>
<body>
<h1 class="title">CREAR JUGUETE</h1>
    <form method="POST" action="/juguete" id="formulario">
        @csrf

        <div class="">
            <label for="marca">Marca</label>
            <input type="text" name="Marca" id="Marca">
        </div>
        <div class="">
            <label for="marca">Precio</label>
            <input type="text" name="Precio" id="Precio">
        </div>
        <input type="submit" name="action" value="enviar">
    </form>
</body>
</html>