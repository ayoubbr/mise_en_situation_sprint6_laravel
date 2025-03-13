<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="/teams/" method="post">
        @csrf
        @method('post')

        <input type="text" name="name">
        <input type="text" name="city">
        <input type="text" name="country">
        <input type="text" name="date_founded">
        <button type="submit">submit</button>

    </form>

</body>

</html>
