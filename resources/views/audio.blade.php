<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>musicfy</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Nunito';
        }

    </style>
</head>

<body class="antialiased">
    <div class="container">
    <ul>
        <li> song is: {{ $newSong->name }}</li>
        <li> duration: {{ $newSong->dur }} </li>
        <li> author id: {{$newSong->user_id}} </li>
        <li> created the day: {{ $newSong->created_at }}</li>
    </ul>
    <audio id="player" controls src="{{ asset($newSong->path) }}" type="audio/mpeg">
    </div>

</body>

</html>
