<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> INEDX </title>
</head>
<body>
    <h1 align="center"> DAFTAR NAMA PRODI </h1>
        <h1 align="center"><a href="{{ route('prodi.create') }}">ADD PRODI</a></h1>
    <table align="center">
        <thead>
            <th> ID </th>
            <th> KODE PRODI </th>
            <th> NAMA PRODI </th>
            <th> <i> ACTION </i> </th>
        </thead>
        <tbody>
            @foreach ($prodi as $item)
            <tr>
                <td> {{ $item->id }} </td>
                <td> {{ $item->kode_prodi }} </td>
                <td> {{ $item->nama_prodi }} </td>
                <td> <a href="{{ route('mhs.showProdi', $item->id) }}"> lihat mahasiswa </a></td>
                <td>
                    <a href="{{  route('prodi.show', $item->id) }}">show</a>
                    <a href="{{  route('prodi.edit', $item->id) }}">edit</a>
                    {!! Form::open(['route' => ['prodi.destroy', $item->id], 'method' => 'delete']) !!}
                        {!! Form::submit('delete') !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>   
</html>