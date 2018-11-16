@extends('layouts.app')

@section('content')

    <h1>{{ $article->title }}</h1>
    <div>{{ $article->body }}</div>
    <div>{{ $article->published_at }}</div>

@endsection