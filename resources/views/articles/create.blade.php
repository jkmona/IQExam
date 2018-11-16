@extends('layouts.app')

@section('content')
    <form action="{{ url('articles') }}" method="POST">
        @csrf
        <div class="form-control">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ $article->title }}" class="form-control"/>
        </div>
        <div class="form-control">
            <label for="body">Body:</label>
            <textarea name="body" id="body" value="{{ $article->body }}" class="form-control"></textarea>
        </div>
        <div class="form-control">
            <label for="published_at">Published At:</label>
            <input type="date" name="published_at" id="published_at" value="{{ $article->body }}" class="form-control"/>
        </div>
        <div class="form-control">
            <button class="btn btn-primary form-control">Add Article</button>
        </div>
    </form>
@endsection