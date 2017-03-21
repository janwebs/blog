<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

// se agregan librerias de mensajes
use Laracasts\Flash\Flash;

use App\Http\Requests\ArticleRequest;

//agregando modelo Article
use App\Article;
//agregando modelo Category
use App\Category;
//agregando modelo Tag
use App\Tag;
//agregando modelo Image
use App\Image;

use Illuminate\Support\Facades\Redirect;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('id','ASC')->paginate(5);
        return view('admin.articles.index')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->get()->lists('name', 'id');
        $tags = Tag::orderBy('name', 'ASC')->get()->lists('name', 'id');

        return view('admin.articles.create')
                ->with('categories', $categories)
                ->with('tags', $tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Manipulacion de imagenes
        if ($request->file('image'))
        {
            $file = $request->file('image');
            $name = 'blog_'.time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/images/articles/';
            $file->move($path, $name);
        }
        //fin manipulacion de imagenes

        $article = new Article($request->all());
        $article->user_id = \Auth::user()->id;
        $article->save();

        $article->tags()->sync($request->tags);

        $image = new Image();
        $image->name = $name;
        $image->article()->associate($article);

        $image->save();

        Flash::success("Se ha registrado el articulo ".$article->title." exitosamente");
        return redirect()->route('admin.articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
