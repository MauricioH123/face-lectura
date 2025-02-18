<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://kit.fontawesome.com/2ae3ad9bb0.js" crossorigin="anonymous"></script>
    <style>
        #mySidebar {
            display: none;
            z-index: 2;
            width: 20%;
            min-width: 300px;
        }
        .w3-bar-block .w3-bar-item {
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="w3-top" id="topBar">
        <div class="w3-xlarge w3-white" id="topBarContainer">
            <div class="w3-padding-16 w3-left">
                <i class="fas fa-bars" onclick="openMenu()"></i>
            </div>
            <div class="w3-right w3-padding-16"></div>
            <div class="w3-center w3-padding-16">
                El Cafe Virtual
            </div>
        </div>
    </div>
    <nav class="w3-sidebar w3-bar-block w3-card w3-large w3-top w3-animate-left" id="mySidebar">
        <a href="" onclick="closeMenu()" class="w3-button" id="closeMenu"><i class="fas fa-times"></i></a>
        <a href="{{ url('/')}}" onclick="closeMenu()" class="w3-bar-item w3-button">Inicio</a>
        <a href="{{ url('/libros')}}" onclick="closeMenu()" class="w3-bar-item w3-button">Libros</a>
        <a href="{{ url('/articulos') }}" onclick="closeMenu()" class="w3-bar-item w3-button">Articulos</a>
        <a href="{{ url('/generos') }}" onclick="closeMenu()" class="w3-bar-item w3-button">Generos</a>
        <a href="{{url('/login')}}" onclick="closeMenu()" class="w3-bar-item w3-button">Mi cuenta</a>
        @auth
        <a href="{{url('/logout')}}" onclick="closeMenu()" class="w3-bar-item w3-button">Cerrar Sesion</a>
        @endauth
    </nav>

    <div class="w3-top" id="topBar">
        <div class="w3-white w3-xlarge" id="topBarContainer">
            <div class="w3-button w3-padding-16 w3-left" onclick="openMenu()">
                <i class="fas fa-bars"></i>
            </div>
            <div class="w3-center w3-padding-16">
                El Cafe Virtual
            </div>
        </div>
    </div>

    <div class="w3-container w3-margin-top">
        @yield('contenido')
    </div>

    <div class="w3-main w3-content w3-padding" id="footer">
        <hr>
        <footer class="w3-row-padding w3-padding-32">
            <div class="w3-half">
                <h3>Pie de pagina</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio at corrupti labore molestiae minima rerum cum quibusdam inventore explicabo, veritatis culpa dolorum tempora autem animi suscipit repellendus corporis harum iusto!</p>
            </div>
            <div class="w3-half">
                <h3>Pie de paginas</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum soluta dolore placeat deleniti illo perferendis voluptate enim explicabo consequatur suscipit assumenda obcaecati ex corporis dicta tenetur quas fugiat, non vero!</p>
            </div>
        </footer>
    </div>



    <script>
        function openMenu() {
            document.getElementById("mySidebar").style.display = "block";
        }

        function closeMenu() {
            document.getElementById("mySidebar").style.display = "none";
        }
    </script>
</body>
</html>