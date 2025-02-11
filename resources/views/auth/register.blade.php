<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends("layouts.base")
    @section("contenido")
    <div class="w3-row" id="form-login-row">
        <div class="w3-col" style="width: 100%;">
            <form method="POST" action="{{route("register")}}" class="w3-container w3-card-4 w3-light-grey" id="loginForm">
                <h2>Registro</h2>
                @csrf
                <label for="email">Nombre</label>
                <input type="text" class="w3-input w3-border" name="name" placeholder="Ingrese su nombre" required value="{{ old('name') }}">
                @error('name')
                <span style="color:red;">{{ $message }}</span>
                @enderror
                <br>

                <label for="email">Correo electronico</label>
                <input type="email" class="w3-input w3-border" name="email" placeholder="Ingrese su email" required value="{{ old('email') }}">
                @error('email')
                <span style="color:red;">{{ $message }}</span>
                @enderror
                <br>

                <label for="password">Contraseña (minimo 8 caracteres)</label>
                <input type="password" class="w3-input w3-border" minlength="8" name="password" placeholder="Ingrese su contraseña" required>
                @error('password')
                <span style="color:red;">{{ $message }}</span>
                @enderror
                <br>

                <label for="password">Repetir Contraseña</label>
                <input type="password" class="w3-input w3-border" name="password_confirmation" required>
                <br>
                
                <button type="submit" class="w3-button w3-black w3-round.small">Ingresar</button>
                <br>
                <br>
                <a href="{{url("/login")}}"><small>¿Ya posee cuenta?</small></a>
            </form>

        </div>

    </div>
    
    @endsection
</body>
</html>