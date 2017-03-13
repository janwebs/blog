<!DOCTYPE html>
<html>
    <head>
        <title>{{ $article->title }}</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/general.css') }}">
    </head>
    <body>
        <strong>Titlulo: </strong>{{ $article->title }}
        <hr>
        <strong>contenido: </strong>{{ $article->content }}
        <hr>
            <strong>Autor: </strong>{{ $article->user->name }} 
        <hr>
        <strong>Tags: | </strong>
        @foreach($article->tags as $tag)
            {{ $tag->name }} |  
        @endforeach
    </body>
</html>
