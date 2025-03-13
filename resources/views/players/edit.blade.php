<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="/players/{{ $player->id }}" method="post">
        @csrf
        @method('put')

        <input type="text" name="fname" value="{{ $player->fname }}">
        <input type="text" name="lname" value="{{ $player->lname }}">
        <input type="number" name="age" value="{{ $player->age }}">
        <input type="text" name="height" value="{{ $player->height }}">
        <input type="text" name="foot" value="{{ $player->foot }}">
        <button type="submit">submit</button>

    </form>

</body>

</html>
