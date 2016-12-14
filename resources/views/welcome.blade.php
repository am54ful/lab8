<!-- ni extend app.blade.php tadi, dia mcm ko include la, untuk guna  -->
@extends('layouts.layout')
<!-- section ni tempat ko set component ko, kalau nak guna ni kat page yg
ko nak, paggil @yield('content') -->
@section('content')
<div class="container">
    <h1 style="margin-top:80px;margin-bottom:10px;">Lists </h1>
    <p><a class="btn btn-success btn-lg" href="{{ action('UserController@create')}}" role="button">Add Person</a></p>
    @foreach($users as $user)
    
    <div class="list-group">
        <div class="list-group-item">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a href="{{ action('UserController@show', [$user->id])}}" class="btn btn-primary">Read</a>
                 <a href="{{ action('UserController@edit', [$user->id])}}" class="btn btn-warning">Update</a>

            </div>
            <h2 class="list-group-item-heading">{{ $user->staffid }}</h2>
            <p class="list-group-item-text">{{ $user->comments}} </p>
        </div>
                
        @endforeach
    </div>
    @endsection