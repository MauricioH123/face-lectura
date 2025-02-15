<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Genre;

class GenerosController extends Controller
{
    public function generosLista(){
        $user = Auth::user();
        $generos = Genre::orderBy('id', 'desc')->paginate(10);
        return view('generos',['generos'=>$generos, 'user'=>$user]);
    }
}
