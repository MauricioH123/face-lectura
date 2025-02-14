<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layouts.admin')
    @section('contenido')

    <div class="w3-container">
        <h1>Administracion</h1>
    </div>

    <div class="w3-container">
        <p>Desde aqui puede crear nuevos articulod, libros, administrar a los usuarios t mucho mas.</p>
    </div>

    <div class="w3-container">
        <div class="w3-third">
            <div class="w3-card-4" style="width: 70%;">
                <header class="w3-container w3-light-grey">
                    <h3>Administrar libros</h3>
                </header>
                <div class="w3-container">
                    <hr>
                    <p>Desde aqui puedes administra los libros en el sistema.</p>
                    <br>
                </div>
                <a class="w3-button w3-block w3-dark-grey" href="{{url('/admin-libros')}}">Administrador</a>
            </div>

            <div class="w3-card-4" style="width: 70%;">
                <header class="w3-container w3-light-grey">
                    <h3>Administrar articulos</h3>
                </header>
                <div class="w3-container">
                    <hr>
                    <p>Desde aqui puedes administra los articulos en el sistema.</p>
                    <br>
                </div>
                <a class="w3-button w3-block w3-dark-grey" href="{{url('/admin-libros')}}">Administrador</a>
            </div>

            <div class="w3-card-4" style="width: 70%;">
                <header class="w3-container w3-light-grey">
                    <h3>Administrar usuarios</h3>
                </header>
                <div class="w3-container">
                    <hr>
                    <p>Desde aqui puedes administra los usuarios en el sistema.</p>
                    <br>
                </div>
                <a class="w3-button w3-block w3-dark-grey" href="{{url('/admin-libros')}}">Administrador</a>
            </div>
        </div>
    </div>
    
    @endsection
    
</body>
</html>