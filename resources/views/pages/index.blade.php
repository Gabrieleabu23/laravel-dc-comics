@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Hello, World!</h1>
    <a href={{ route('users.create')}} class="my-4 d-inline-block text-dark text-decoration-none">AGGIUNGI FUMETTO</a>
    <ul>
        @foreach ($titolo as $item)
        <li>
           <a href={{ route('users.show', $item -> id) }}>Nome fumetto:  {{ $item -> titolo}} Anno pubblicazione: {{$item -> anno_pubblicazione}}</a>
        </li>
            
        @endforeach
    </ul>
@endsection
