<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    @vite(['resources/css/estiloss.css',])
</head>
<body>
    @if (session()->has('success'))
        <!-- <p>SE BORROOOO</p> -->
    @endif
    
    <h1 class="title">JUGUETES</h1>
    <a href="/juguete/create">Crear Juguete</a>
    <a href="/categoria/create">Seleccionar Categoria</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Precio</th>
                <th>Categorias</th>
                <th>Ver</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($juguetes as $juguete)
                <tr>
                    <td>{{$juguete->id}}</td>
                    <td>{{$juguete->Marca}}</td>
                    <td>{{$juguete->Precio}}</td>
                    <td>
                    @foreach ($juguete->categorias as $Categoria)
                        {{$categoria->Marca}}
                    @endforeach
                    </td>
                    <td><a href="/juguete/{{$juguete->id}}">IR</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>