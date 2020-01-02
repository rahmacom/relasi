<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> SHOW </title>
</head>
<body>
    <table align="center">
    <tr>
        <td align="right">NIM</td>
        <td>&nbsp; : &nbsp;</td>
        <td>{{ $mhs->nim }} </td>
    </tr>

    <tr>
        <td align="right">NAMA</td>
        <td>&nbsp; : &nbsp;</td>
        <td>{{ $mhs->nama }} </td>
    </tr>

    <tr>
        <td align="right">ALAMAT</td>
        <td>&nbsp; : &nbsp;</td>
        <td>{{ $mhs->alamat }} </td>
    </tr>

    <tr>
        <td align="right">PRODI</td>
        <td>&nbsp; : &nbsp;</td>
        <td>{{ $mhs->prodi->nama_prodi }} </td>
    </tr>

    <tr>
        <td>
            <a href="{{  route('mhs.index') }}">return</a>
            <a href="{{  route('mhs.edit', $mhs->id) }}">edit</a>
                {!! Form::open(['route' => ['mhs.destroy', $mhs->id], 'method' => 'delete']) !!}
                {!! Form::submit('delete') !!}
                {!! Form::close() !!}
        </td>
    </tr>

</table>
</body>
</html>