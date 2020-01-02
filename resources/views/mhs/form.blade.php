<table align="center">
    <tr>
        <td align="right">NIM</td>
        <td>&nbsp; : &nbsp;</td>
        <td>{!! form::text('nim', old('nim'), ['required']) !!}</td>
    </tr>

    <tr>
        <td align="right">NAMA</td>
        <td>&nbsp; : &nbsp;</td>
        <td>{!! form::text('nama', old('nama'), ['required']) !!}</td>
    </tr>

    <tr>
        <td align="right">ALAMAT</td>
        <td>&nbsp; : &nbsp;</td>
        <td>{!! form::textarea('alamat', old('alamat'), ['required']) !!}</td>
    </tr>

    <tr>
        <td align="right">PRODI</td>
        <td>&nbsp; : &nbsp;</td>
        <td>{!! form::select('prodi_id', $prodi, old('prodi_id'), ['required']) !!}</td>
    </tr>

    <tr>
        <td colspan="4" align="center">{!! form::submit('SUBMIT') !!}</td>
    </tr>

</table>