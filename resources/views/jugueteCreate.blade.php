<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrearJuguete</title>
    @vite(['resources/css/estiloss.css',])
</head>
<body>
<h1 class="modern-header">CREAR JUGUETE</h1>
    <form method="POST" action="/juguete" id="formulario">
        @csrf

        <div class="input-group">
            <label for="marca">Marca</label>
            <input type="text" name="Marca" id="Marca">
        </div>
<br>
        <div class="input-group">
            <label for="marca">Precio</label>
            <input type="text" name="Precio" id="Precio">
        </div>
<br>
        {{-- APARTADO DE INSERCIÓN --}}
        <div class="input-group">
        <label for="categorias">Categorías</label>
            <select id="categorias" name="categorias[]" multiple>
                <option value="" disabled selectec>Selecciona una Edad:</option> <!-- "selected" removido porque no es adecuado en múltiples selects si se desea que el usuario elija. -->
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->Edad }}</option>
                @endforeach
            </select>
        </div>
<br>
            <div class="input-group" style="margin-top: 30px;">
                <input type="submit" name="action" value="Enviar" class="btn waves-effect waves-light btn-large">
            </div>
    </form>
</body>
</html>