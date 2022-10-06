<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @yield('konten')
    <form action="dataTabelcovid/proses" method="POST" >
        @csrf
        <table>
            <tr>
                <td>Nama </td><td>:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Alamat </td> <td>:</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Suhu Tubuh </td><td>:</td>
                <td><input type="text" name="suhutubuh"></td>
            </tr>
            <tr>
                <td>Vaksinasi Ke:</td><td>:</td>
                <td>
                    <select name="vaksin" id="vaksin">
                    <option value="#" name="vaksin" selected>Silahkan Pilih</option>
                    <option value="1" name="vaksin">1</option>
                    <option value="2" name="vaksin">2</option>
                    <option value="3" name="vaksin">3</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pernah Kena Covid?</td> <td>:</td>
                <td><input type="radio" id="html" name="covid" value="Sudah">
                    <label for="html">Sudah</label><br>
                    <input type="radio" id="css" name="covid" value="Belum">
                    <label for="css">Belum</label><br>
                </td>
            </tr>
            <tr>
                <td><button type="submit">Kirim Data</button>
                    <a href="home">Halaman Utama</a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>