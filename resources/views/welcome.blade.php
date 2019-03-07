@extends('layout')

@section('title', 'Home')

@section('content')
    Welcome Topia Students
@endsection

@section('body')
    <ul>
        @foreach ($tasks as $x)
            <li>{{$x}}</li>
        @endforeach
    </ul>
@endsection
