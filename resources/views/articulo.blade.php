<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article->title }}</title>
    <style>
        .preview {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .article-container {
            margin-top: 5%;
            padding: 20px;
        }
    </style>
</head>
<body>
    @extends('layouts.base')
    @section('contenido')

    <div class="w3-main w3-content w3-padding article-container">
        <div class="w3-row-padding">
            <!-- Columna Izquierda: Imagen y Descarga -->
            <div class="w3-col m4 l3 w3-padding w3-light-grey w3-center">
                <img src="{{ url('storage/'.$article->image) }}" alt="Imagen del libro" class="preview">
                <h5>{{ $article->title }}</h5>
                <p>
                    <a href="{{ url('storage/'.$article->pdf) }}" class="w3-button w3-blue w3-round" download>📥 Descargar PDF</a>
                </p>
            </div>

            <!-- Columna Derecha: Contenido -->
            <div class="w3-col m8 l9 w3-padding">
                <h3>{{ $article->title }}</h3>
                <p><strong>{{ $article->description }}</strong></p>
                <p>{{ $article->content }}</p>
            </div>
        </div>
    </div>

    @endsection
</body>
</html>
