<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
    <h3>Data diri saat pandemi Covid-19</h3>
    <table>
        <tr>
            <td>Nama</td><td>:</td>
            <td>{{ $nama }}</td>
        </tr>
        <tr>
            <td>Alamat</td><td>:</td>
            <td>{{ $alamat }}</td>
        </tr>
        <tr>
            <td><a href="/data" type="button">Kembali</a></td>
        </tr>
    </table>
</body>
</html>