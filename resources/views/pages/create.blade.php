<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creazione</title>
</head>
<body>
    <h1>
        Nuovo Fumetto
    </h1>
    <form
        action="{{ route('users.store') }}"
        method="POST"
    >

        @csrf
        @method('POST')

        <label for="titolo">titolo</label>
        <input type="text" name="titolo" id="titolo">
        <br>
        <label for="numero_volume">N.Volume</label>
        <input type="number" name="numero_volume" id="numero_volume">
        <br>
        <label for="anno_pubblicazione">Anno Pubblicazione</label>
        <input type="number" name="anno_pubblicazione" id="anno_pubblicazione">
        <br>
        <label for="descrizione">Descrizione</label>
        <input type="text" name="descrizione" id="descrizione">
        <br>
        <input type="submit" value="CREATE">
    </form>
    
</body>
</html>