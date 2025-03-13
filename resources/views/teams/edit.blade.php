<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="/teams/{{$team->id}}" method="post">
        @csrf
        @method('put')

        <input type="text" name="name" value="{{ $team->name }}">
        <input type="text" name="city" value="{{ $team->city }}">
        <input type="text" name="country" value="{{ $team->country }}">
        <input type="text" name="date_founded" value="{{ $team->date_founded }}">
        <button type="submit">submit</button>

    </form>

</body>

</html>
