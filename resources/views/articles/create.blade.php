@extends('layouts.app')

@section('content')
    <form action="{{ url('articles') }}" method="POST">
        @include('articles._form', ['submitButtonText' => 'Add Article'])
    </form>
    @include('errors.list')
@endsection