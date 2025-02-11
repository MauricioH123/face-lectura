<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function dashboard(){
        $user = Auth::user();
        if($user->role_id != 1){
            return redirect("/");
        }
        return view("dashboard");

    }

    public function todasLasObras(){
        $articulos = Article::all();
        $user = Auth::user();
        if($user->role_id != 1){
            return redirect('/');
        }
        return view('admin.todasLasObras', compact('articulos'));
    }

    public function getLibros(){
        $user = Auth::user();
        if($user -> role_id != 1){
            return redirect('/');
        }
        $articulos = Article::where('clasification_id', 1)->get();
        return view('admin.libros', compact('articulos'));
    }

    public function getArticulos(){
        $user = Auth::user();
        if($user->role_id != 1){
            return redirect('/');
        }

        $articulos = Article::where('clasification_id', 2)->get();
        return view('admin.articulos', compact('articulos'));
    }

    

}
