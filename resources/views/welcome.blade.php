<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .word-break{
            word-break: break-all;
        }
        .preview{
            width: 100%;
        }
        #contenido{
            margin-top: 5%;
        }

        .w-5{
            width: 10%;
        }
        .hidden{
            display:none;
        }
        .w3-display-topmiddle{
            text-align: center;
        }
    </style>
</head>
<body>
    @extends("layouts.base")
    @section("contenido")
    <div class="w3-main w3-content w3-padding" id="contenido">
        <div class="w3-row-padding w3-padding-16 w3-center">
            @foreach ($articles as $article)
            <div class="w3-quarter">
                <img src="{{ url('storage/'.$article->image) }}" alt="" class="preview">
                <h3>{{$article->title}}</h3>
                <p class="word-break">{{$article->description}}</p>
            </div>
            @endforeach
        </div>
    </div>
    
    <div class="w3-display-container">
        <div class="w3-row">
            <div class="w3-third w3-display-topmiddle">
                {{$articles->links()}}
            </div>
        </div>
    </div>
    @endsection
    
</body>
</html>