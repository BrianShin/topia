@extends('layout')

@section('title', 'Home')

@section('content')
    Welcome to the site
@endsection

@section('body')
    <ul>
        @foreach ($tasks as $x)
            <li>{{$x}}</li>
        @endforeach
    </ul>
@endsection
