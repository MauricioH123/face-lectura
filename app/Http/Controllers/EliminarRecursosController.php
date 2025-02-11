<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class EliminarRecursosController extends Controller
{
    public function eliminarLibros(Request $request){
        $idArticulo = $request->id;
        $articulo = Article::find($idArticulo);
        $articulo->delete();
        return redirect('/admin-libros');
    }
    

}
