@extends('layouts.app')

@section('content')
    <h1>Articles</h1>
    <hr/>
    @foreach($articles as $article)
        <article>
            <h2>
                <a href="{{action('ArticlesController@show', [$article->id]) }}">{{ $article->title }}</a>
                <a href="{{url('/articles', $article->id) }}">{{ $article->title }}</a>
            </h2>
            <div class="body">{{ $article->body }}</div>
            <h4>{{ $article->published_at }}</h4>
        </article>
        
    @endforeach
@stop