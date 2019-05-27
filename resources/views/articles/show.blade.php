@extends('layouts.app')

@section('content')

    <h1>{{ $article->title }}</h1>
    <div>{{ $article->body }}</div>
    <div>{{ $article->published_at }}</div>
    @unless($article->tags->isEmpty())
        <h5>Tags:</h5>
        <ul>
            @foreach($article->tags as $tag)
                <li>{{ $tag->name }}</li>
            @endforeach
        </ul>
    @endunless
@endsection