<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @if ($teams)

        @foreach ($teams as $team)
            <h1>{{ $team->name }}</h1>
            <p>{{ $team->city }}</p>
            <p>{{ $team->country }}</p>
            <p>{{ $team->date_founded }}</p>
            <form action="/teams/{{ $team->id }}" method="post">
                @csrf
                @method('delete')
                <button type="submit">delete</button>
            </form>
            <form action="/teams/{{ $team->id }}" method="get">
                @csrf
                @method('get')
                <button type="submit">edit</button>
            </form>
            <form action="/team/{{ $team->id }}" method="get">
                @csrf
                @method('get')
                <button type="submit">details</button>
            </form>
            <form action="/teams/{{ $team->id }}/players" method="get">
                @csrf
                @method('get')
                <button type="submit">players</button>
            </form>
        @endforeach
    @endif
</body>

</html>
