@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Fumetti</h1>
    <a href={{ route('users.create') }} class="my-4 d-inline-block text-dark text-decoration-none">AGGIUNGI FUMETTO</a>
    <ul>
        @foreach ($titolo as $item)
            <li>
                <a href={{ route('users.show', $item->id) }}>Nome fumetto: {{ $item->titolo }} Anno pubblicazione:
                    {{ $item->anno_pubblicazione }}</a>
                <a class="mx-2 bg-dark text-white" href={{ route('users.edit', $item->id) }}>Modifica</a>
                <form id="Form-1" class="d-inline-block" action="{{ route('users.destroy', $item->id) }}" method="POST">

                    @csrf
                    @method('DELETE')

                    <input type="submit" value="X" onclick="delFumetto(event)">
                </form>
            </li>
        @endforeach
    </ul>
@endsection
<script>
    function delFumetto(event) {

        let scelta = prompt("Sei sicuro? Digita 'si' o 1 per continuare..");
        if (scelta == 'si' || scelta =="1") {
            alert('Procedo con il delete...');
            document.getElementById('Form-1').submit();
        } else {
            alert("Ok, annullo....")
            event.preventDefault();
        }
    }
</script>
