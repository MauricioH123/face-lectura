<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function home(){
        $articles = Article::orderBy("id", "desc")->paginate(8);
        return view("welcome", ["articles"=>$articles]);
    }

    public function articulo($id){
        $user = Auth::user();
        if($user == null){
            return redirect('/login');
        }
        $article = Article::find($id);
        return view('articulo', ['article'=> $article, 'user'=> $user]);
    }
}
