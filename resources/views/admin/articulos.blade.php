<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articulos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    @extends('layouts.admin')
    @section('contenido')
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
                        {{ $articulo->image }}
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

    @endsection

</body>

</html>