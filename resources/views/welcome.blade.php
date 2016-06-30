@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                    <p>pwd :12345678=>{{$pwd}}</p>
                    <p>pwd checked:12345678=>{{$checked}}</p>
                    <p>{{Auth::guest()}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
