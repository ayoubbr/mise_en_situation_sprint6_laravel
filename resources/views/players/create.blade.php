<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="/players/" method="post">
        @csrf
        @method('post')

        <input type="text" name="fname">
        <input type="text" name="lname">
        <input type="number" name="age">
        <input type="text" name="height">
        <input type="text" name="foot">
        <button type="submit">submit</button>

    </form>

</body>

</html>
