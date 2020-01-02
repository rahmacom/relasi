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
        <td align="right">KODE PRODI</td>
        <td>&nbsp; : &nbsp;</td>
        <td>{{ $prodi->kode_prodi}} </td>
    </tr>

    <tr>
        <td align="right">NAMA PRODI</td>
        <td>&nbsp; : &nbsp;</td>
        <td>{{ $prodi->nama_prodi }} </td>
    </tr>
    <tr>
        <td>
            <a href="{{  route('prodi.index') }}">return</a>
            <a href="{{  route('prodi.edit', $prodi->id) }}">edit</a>
                {!! Form::open(['route' => ['prodi.destroy', $prodi->id], 'method' => 'delete']) !!}
                    {!! Form::submit('delete') !!}
                {!! Form::close() !!}
        </td>
    </tr>
</table>
</body>
</html>