<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://kit.fontawesome.com/2ae3ad9bb0.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:20%;">
        <h3 class="w3-bar-item">Panel de administracion</h3>
        <a href="{{url('/admin-libros')}}" class="w3-bar-item w3-button">Libros</a>
        <a href="{{url('/admin-articulos')}}" class="w3-bar-item w3-button">Articulo</a>
        <a href="{{url('/nueva-obra')}}" class="w3-bar-item w3-button">Nueva Obra</a>
        <a href="{{url('/admin-generos')}}" class="w3-bar-item w3-button">Generos</a>
        <a href="{{url('/usuario')}}" class="w3-bar-item w3-button">Usuarios</a>
        <a href="{{url('/logout')}}" class="w3-bar-item w3-button">Salir</a>
    </div>

    <div style="margin-left:20%;">
        @yield('contenido')

    </div>
</body>
</html>