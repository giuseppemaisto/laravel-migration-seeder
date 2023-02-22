<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
<div class="container">
    <div class="row">
    <div>
    @foreach($trains as $train)
   
    <p>azienda: {{$train['Azienda']}}</p>
    <p>stazione di partenza: {{$train['stazione_di_partenza']}}</p>
    <p>stazione di arrivo: {{$train['stazione_di_arrivo']}}</p>
    <p>stazione di partenza: {{$train['stazione_di_partenza']}}</p>
    <p>orario di partenza: {{$train['orario_di_partenza']}}</p>
    <p>orario di arrivo: {{$train['orario_di_arrivo']}}</p>
    <p>codice treno: {{$train['codice_treno']}}</p>
    <p>carrozze: {{$train['num_carrozze']}}</p>
   


    @endforeach
    </div>
    </div>
</div>

</body>

</html>