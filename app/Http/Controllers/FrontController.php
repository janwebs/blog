<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon;

//agregando modelo Article
use App\Article;
//agregando modelo Category
use App\Category;
//agregando modelo Tag
use App\Tag;
//agregando modelo Image
//use App\Image;

class FrontController extends Controller
{
    
    public function __construct()
    {
        Carbon::setLocale('es');
    }

    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->paginate(1);
        $articles->each(function($articles){
            $articles->category;
            $articles->images;
        });
        return view('front.index')->with('articles',$articles);
    }

    public function searchCategory($name)
    {
        $category = Category::SearchCategory($name)->first();
        $articles = $category->articles()->paginate(4);
        $articles->each(function($articles){
            $articles->category;
            $articles->images;
        });
        return view('front.index')->with('articles', $articles);
    }

    public function searchTag($name)
    { 
        $tag = Tag::SearchTag($name)->first();
        $articles = $tag->articles()->paginate(4);
        $articles->each(function($articles){
            $articles->category;
            $articles->images;
        });
        return view('front.index')
                ->with('articles', $articles);   
    }

    public function viewArticle($slug)
    { 
        $article = Article::findBySlugOrFail($slug);
        
        return view('front.index')
                ->with('articles', $articles);   
    }

}
