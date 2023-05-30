<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>DATA USER</h2>
    @foreach ($data as $user)
        <ol>
            <li>{{$user->nama}}</li>
            <li>{{$user->email}}</li>
            <li>{{$user->phone}}</li>
            <li>{{$user->image}}</li>
        </ol>
    @endforeach
</body>
</html>