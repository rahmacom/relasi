<table align="center">
    <tr>
        <td align="right">KODE PRODI</td>
        <td>&nbsp; : &nbsp;</td>
        <td>{!! form::text('kode_prodi', old('kode_prodi'), ['required']) !!}</td>
    </tr>

    <tr>
        <td align="right">NAMA PRODI</td>
        <td>&nbsp; : &nbsp;</td>
        <td>{!! form::text('nama_prodi', old('nama_prodi'), ['required']) !!}</td>
    </tr>

    <tr>
        <td colspan="4" align="center">{!! form::submit('SUBMIT') !!}</td>
    </tr>

</table>