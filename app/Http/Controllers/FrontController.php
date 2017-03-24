<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//agregando modelo Article
use App\Article;
//agregando modelo Category
use App\Category;
//agregando modelo Tag
use App\Tag;
//agregando modelo Image
use App\Image;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->paginate(4);
        $articles->each(function($articles){
            $articles->category;
            $articles->images;
        });
        return view('front.index')
                ->with('articles',$articles);
    }

    
}
