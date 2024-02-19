@extends('layouts.main-layout')
@section('head')
    <title>Show</title>
@endsection
@section('content')
    <h1>
        [
            {{ $Fumetto -> id }}
        ]
    </h1>
        
        <h2> <strong>Titolo:</strong> {{ $Fumetto -> titolo }}</h2>
        <h6><strong>Descrizione</strong>: {{ $Fumetto -> descrizione }}</h6>
        <strong>Anno Pubblicazione: 
            <h3>{{ $Fumetto -> anno_pubblicazione }}</h3>
        </strong>
        <strong>N.Volume: 
            <h3>{{ $Fumetto -> numero_volume }}</h3>
        </strong>
        <h4>PER TORNARE INDETRO, <a href={{route('users.index')}}>CLICCA</a></h4>
@endsection