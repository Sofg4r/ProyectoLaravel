<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    @vite(['resources/css/estiloss.css',])
</head>
<body>
<div class="container">
    <h1 class="title">LISTA DE CATEGORÍAS</h1>
    <table class="highlight striped responsive-table centered">
        <thead>
                <tr>
                    <th>ID</th>
                    <th>CATEGORIAS</th>
                    <th>Ver</th>
                </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)
                <tr>
                    <td>{{$categoria->id}}</td>
                    <td>{{$categoria->Edad}}</td>
                    <td><a href="/categoria/{{$categoria->id}}" class="waves-effect waves-light btn">IR</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>