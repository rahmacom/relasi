<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> CREATE </title>
</head>
<body>
    <h1 align="center"> ADD NEW MAHASISWA </h1>
    {!! Form::open(['route' => 'mhs.store', 'method' => 'POST']) !!}
        @include('mhs.form')
    {!! Form::close() !!}
</body>
</html>