@extends('layouts.app')
this is about page
@if($name == 'abc')
    <div>this</div>
@else
    <div class="nothing">ok</div>
@endif
 @foreach($people as $person)
     <li>{{$persion}}</li>
 @endforeach