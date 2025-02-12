<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">

    @extends('layouts.admin')
    @section('contenido')

    <div class="container mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Lista de Artículos</h2>

        <div class="w3-container w3-padding">
    <div class="w3-row">
        <div class="w3-half w3-card w3-padding w3-round-large w3-white">
            <form action="{{url('/nuevoLibro')}}" method="post" enctype="multipart/form-data">
                @csrf
                
                <fieldset class="w3-border w3-padding">
                    <legend class="w3-text-blue-grey w3-large"><b>Registrar Nuevo Libro</b></legend>

                    <label for="title" class="w3-text-gray"><b>Título</b></label>
                    <input class="w3-input w3-border w3-round w3-margin-bottom" type="text" name="title" placeholder="Ingrese el título" required>

                    <label for="pages" class="w3-text-gray"><b>Páginas</b></label>
                    <input class="w3-input w3-border w3-round w3-margin-bottom" type="text" name="pages" placeholder="Ingrese el número de páginas" required>

                    <label for="description" class="w3-text-gray"><b>Descripción</b></label>
                    <input class="w3-input w3-border w3-round w3-margin-bottom" type="text" name="description" placeholder="Ingrese la descripción" required>

                    <label for="content" class="w3-text-gray"><b>Contenido</b></label>
                    <textarea class="w3-input w3-border w3-round w3-margin-bottom" name="content" placeholder="Ingrese el contenido" required></textarea>

                    <label for="image" class="w3-text-gray"><b>Imagen de portada</b></label>
                    <input class="w3-input w3-border w3-round w3-margin-bottom" type="file" name="image" required>

                    <label for="pdf" class="w3-text-gray"><b>PDF</b></label>
                    <input class="w3-input w3-border w3-round w3-margin-bottom" type="file" name="pdf" required>

                    <label for="clasification_id" class="w3-text-gray"><b>Clasificación</b></label>
                    <select name="clasification_id" class="w3-select w3-border w3-round w3-margin-bottom">
                        <option value="" disabled selected>Seleccione la opción</option>
                        <option value="1">Ebook</option>
                        <option value="2">Artículo</option>
                    </select>

                    <label for="genre_id" class="w3-text-gray"><b>Géneros</b></label>
                    <select name="genre_id" class="w3-select w3-border w3-round w3-margin-bottom">
                        <option value="" disabled selected>Seleccione la opción</option>
                        <option value="1">Electrónica</option>
                        <option value="2">Cocina</option>
                        <option value="3">Música</option>
                        <option value="4">Historia</option>
                    </select>

                    <button type="submit" class="w3-button w3-green w3-hover-dark-grey w3-round-large w3-block w3-margin-top">
                        <b>Crear</b>
                    </button>
                </fieldset>

            </form>
        </div>
    </div>
</div>


        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-200 bg-white rounded-lg">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-4 py-3 text-left">Título</th>
                        <th class="px-4 py-3 text-left">Género</th>
                        <th class="px-4 py-3 text-left">Clasificación</th>
                        <th class="px-4 py-3 text-left">Autor</th>
                        <th class="px-4 py-3 text-left">Imagen</th>
                        <th class="px-4 py-3 text-left">Páginas</th>
                        <th class="px-4 py-3 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($articulos as $articulo)
                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2">{{ $articulo->title }}</td>
                        <td class="px-4 py-2">{{ $articulo->genre->name }}</td>
                        <td class="px-4 py-2">{{ $articulo->clasification->name }}</td>
                        <td class="px-4 py-2">{{ $articulo->author }}</td>
                        <td class="px-4 py-2">
                            <img src="{{ $articulo->image }}" alt="Imagen" class="w-16 h-16 object-cover rounded-md border">
                        </td>
                        <td class="px-4 py-2">{{ $articulo->pages }}</td>
                        <td class="px-4 py-2 text-center">
                            <form action="{{ url('/eliminar-libro') }}" method="post">
                                @csrf 
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{ $articulo->id }}">
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-700">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @endsection

</body>
</html>
