<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Grazie per averci contattati,</h1>
    <p>In nostro Costumer Care ti contatterà a breve.</p>
    <p>Ecco il riepilogo dei tuoi dati:</p>
    <ul>
        <li>Il tuo nome è: {{$contact['userName']}}</li>
        <li>La tua mail è: {{$contact['mail']}}</li>
        <li>Questo è il tuo messaggio:{{$contact['message']}}</li>
    </ul>
</body>
</html>