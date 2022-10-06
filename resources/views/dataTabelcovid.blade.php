<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <table class="table">
		<thead>
		  <tr>
			<th scope="col">No</th>
			<th scope="col">Nama</th>
			<th scope="col">Alamat</th>
			<th scope="col">Suhu Tubuh</th>
			<th scope="col">Vaksinasi Ke</th>
			<th scope="col">Covid</th>
			<th scope="col">Aksi</th>
		  </tr>
		</thead>
		<tbody>
		  <tr>
			<th scope="row">1</th>
			<td>{{ $nama }}</td>
			<td>{{ $alamat }}</td>
			<td>{{ $suhutubuh }}</td>
			<td>{{ $vaksinasi }}</td>
			<td>{{ $covid }}</td>
			<td><a class="btn btn-warning" href="#" role="button">Edit</a> <a class="btn btn-danger" href="#" role="button">Delete</a></td>
		  </tr>
		</tbody>
	  </table>
	  <a class="btn btn-primary" href="/home" role="button">Kembali</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>