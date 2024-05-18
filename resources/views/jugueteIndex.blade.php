<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    @vite(['resources/css/estiloss.css',])
</head>
<body>
    <header class="modern-header">
        <h1 class="title">JUGUETES</h1>
        <br>
        <nav>
            <ul>
                <li><a href="/juguete/create">Crear Juguete</a></li>
                <li><a href="/categoria/create">Seleccionar Categoría</a></li>
            </ul>
        </nav>
    </header>

    @if (session()->has('success'))
        <!-- <p>SE BORROOOO</p> -->
    @endif
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Precio</th>
                <th>Categorias de Edad</th>
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
                    @foreach ($juguete->categorias as $categoria)
                        {{$categoria->Edad}}
                    @endforeach
                    </td>
                    <td><a href="/juguete/{{$juguete->id}}">MOSTRAR EL JUGUETE</a></td>
                </tr>   
            @endforeach
        </tbody>
    </table>
</body>
</html>