<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @if ($player)
        <h1>{{ $player->fname }}</h1>
        <h1>{{ $player->lname }}</h1>
        <p>{{ $player->age }}</p>
        <p>{{ $player->height }}</p>
        <p>{{ $player->foot }}</p>
        <form action="/players/{{ $player->id }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">delete</button>
        </form>
        <form action="/players/{{ $player->id }}" method="get">
            @csrf
            @method('get')
            <button type="submit">edit</button>
        </form>
    @endif
</body>

</html>
