<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Categoria</title>
    @vite(['resources/css/estiloss.css',])
</head>
<body>
<div class="container">
    <h1 class="title">INGRESAR CATEGORIA DEL JUGUETE</h1>
    <form method="POST" action="/categoria" id="formulario">
        @csrf
        <div class="container">
            <div class="input-field">
                <label for="categoria">Edad</label>
                <input type="text" name="Edad" id="Edad"/>
            </div>
            <div class="center-align" style="margin-top: 30px;">
                <input type="submit" name="action" value="enviar" class="btn waves-effect waves-light btn-large">
            </div>
        </div>
        
    </form>
</div>
</body>
</html>