<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//Aqui se incluye el/los modelo(s) que se usuara(n) en este controlador
use App\Article;

class ArticlesController extends Controller
{
   public function viewArticle($id){
        //echo "id de articulo: ".$id;
        $article = Article::find($id);
        // para mostrar las relaciones con otras tablas
        $article->category;
        $article->user;
        $article->tags;
        // dd() es el equivalente a var_dump()
        //dd($article);
        return view('article.index',['article' => $article]);
   }
}
