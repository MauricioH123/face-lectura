<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
    <style>
        .preview{
            width: 100%;
            height: 300px;
        }

        #contenido{
            margin-top: 5%;
        }

        .w-5{
            width: 10%;
        }

        .hidden{
            display: none;
        }

        .w3-display-topmiddle{
            text-align: center;
        }

        .w3-quarter{
            margin-bottom: 2%;
        }
    </style>
</head>

<body>
    @extends('layouts.base')
    @section('contenido')
    <div class="w3-row">
        <div class="w3-center w3-padding-16">
            <h4>Libros</h4>
        </div>
    </div>

    <div class="w3-row">
        <div class="w3-center w3-padding-16">
            <p>Aqui puede encontrar todos los articulos de plataforma, obras compleyas con contenido sobre temas interesantes. En cada uno, podras acceder a una introduccion sobre dicho tema, y tener una mirada amplia en la disciplina</p>
        </div>
    </div>


    <div class="w3-main w3-content w3-padding" id="contenido">
        <div class="w3-row-padding w3-padding-16 w3-center">
            @foreach ($articles as $article)
            <div class="w3-quarter">
                <img src="{{ url('storage/'. $article->image) }}" alt="" class="preview">
                <a href="{{ url('/articulo/'.$article->id) }}">
                <h3>{{ $article->title }}</h3>
                </a>
                <p class="word-break">{{ $article->description }}</p>
            </div>            
            @endforeach
        </div>
    </div>

    <div class="w3-display-container">
        <div class="w3-row">
            <div class="w3-third w3-display-topmiddle">
                {{ $articles->links() }}
            </div>
        </div>
    </div>
    <a href="{{ url('/articulo'.$article->id) }}">
        <h3>{{ $article->title }}</h3>
    </a>

    @endsection



</body>

</html>