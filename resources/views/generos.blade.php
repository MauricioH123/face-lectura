<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generos</title>
</head>

<body>
    @extends('layouts.base')
    @section('contenido')
    <div class="w3-row">
        <div class="w3-center w3-padding-16 w3-margin-top">
            <h4>Generos Disponibles</h4>
        </div>
    </div>

    <div class="w3-container w3-margin">
        <table class="w3-table-all w3-centered">
            <tr>
                <th>Genero</th>
                <th>Descripcion</th>
            </tr>
            @foreach ($generos as $genero)
            <tr>
                <td>{{ $genero->name }}</td>
                <td>{{ $genero->description }}</td>
            </tr>
            @endforeach
        </table>

    </div>



    @endsection

</body>

</html>