<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class HomeController extends Controller
{
    //
    public function home(){
        $articles = Article::orderBy("id", "desc")->paginate(8);
        return view("welcome", ["articles"=>$articles]);
    }
}
