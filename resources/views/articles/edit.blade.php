@extends('layouts.app')

@section('content')
    <form action="{{ url('articles', $article->id) }}" method="POST">
        <input  type="hidden" name="_method" value="PATCH" />
        <h3>Edit:{{ $article->title }}</h3>
        @include('articles._form', ['submitButtonText' => 'Update Article'])
    </form>
    {{-- var_dump($errors) --}}
    @include('errors.list')
@endsection