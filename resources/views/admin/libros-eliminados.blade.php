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
                            <form action="{{ url('/restaurar-libros') }}" method="post">
                                @csrf 
                                @method('POST')
                                <input type="hidden" name="id" value="{{ $articulo->id }}">
                                <button type="submit" class="bg-green-500 text-white px-3 py-1 rounded-md hover:bg-red-700">
                                    Restaurar
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
