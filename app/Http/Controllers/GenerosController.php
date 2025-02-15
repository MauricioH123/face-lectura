<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Genre;
use App\Models\Article;

class GenerosController extends Controller
{
    public function generosLista(){
        $user = Auth::user();
        $generos = Genre::orderBy('id', 'desc')->paginate(10);
        return view('generos',['generos'=>$generos, 'user'=>$user]);
    }

    public function genero($id){
        $user = Auth::user();
        if($user == null){
            return redirect('/login');
        }
        $genero = Genre::findOrFail($id);
        $articles = Article::where('genre_id', $id)->get();
        return view('genero', compact('genero', 'articles'));
    }
}
