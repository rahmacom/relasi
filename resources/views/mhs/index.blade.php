<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> INEDX </title>
</head>
<body>
    <h1 align="center"> NAMA MAHASISWA </h1>
    <h1 align="center"><a href="{{ route('mhs.create') }}">ADD MAHASISWA</a></h1>
    <table align="center">
        <thead>
            <th> NIM </th>
            <th> NAMA </th>
            <th> ALAMAT </th>
            <th> PRODI </th>
            <th> <i> ACTION </i> </th>
        </thead>
        <tbody>
            @foreach ($mhs as $item)
            <tr>
                <td> {{ $item->nim }} </td>
                <td> {{ $item->nama }} </td>
                <td> {{ $item->alamat }} </td>
                <td> {{ $item->prodi->kode_prodi }} </td>
                <td>
                    <a href="{{  route('mhs.show', $item->id) }}">show</a>
                    <a href="{{  route('mhs.edit', $item->id) }}">edit</a>
                    {!! Form::open(['route' => ['mhs.destroy', $item->id], 'method' => 'delete']) !!}
                        {!! form::submit('delete') !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>   
</html>