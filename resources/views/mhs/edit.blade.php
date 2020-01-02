<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> EDIT </title>
</head>
<body>
    <h1 align="center"> edit MAHASISWA </h1>
    {!! Form::model($mhs, ['route' => ['mhs.update', $mhs->id], 'method' => 'PUT']) !!}
        @include('mhs.form')
    {!! Form::close() !!}
</body>
</html>