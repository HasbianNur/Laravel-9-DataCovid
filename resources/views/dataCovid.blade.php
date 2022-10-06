<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
    @section('kontent')
    <div class="container pt-3">
        <div class="row">
            <div class="col-md-4 d-flex justify-content-center">
                <div class="box-form-covid">
                    <form action="send/datacovid" class="form-covid" method="POST">
                        <h2 class="text-center pb-2" style="font-family:sans-serif;font-size:25px;border-bottom: 1px solid #aaa">Data Covid-19</h2>
                        @csrf
                        <div class="mb-3 text-white">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" required>
                        </div>
                        <div class="mb-3 text-white">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="nama" placeholder="Alamat" required>
                        </div>
                        <div class="mb-3 text-white">
                            <label for="suhu_tubuh" class="form-label">Suhu Tubuh</label>
                            <input type="text" name="suhu_tubuh" class="form-control" id="suhu_tubuh" placeholder="Suhu Tubuh" required>
                        </div>
                        <div class="mb-3 text-white">
                            <label for="vaksinasi">Vaksinasi : </label>
                            <select name="vaksinasi" id="vaksinasi" required>
                                <option value="V-1">V-1</option>
                                <option value="V-2">V-2</option>
                                <option value="V-3">V-3</option>
                            </select>
                        </div>

                        <div class="pernah-terdampak">
                            <p class="m-0">Sudah pernah terdampar ? </p>
                            <div class="form-check">
                                <input class="form-check-input" value="Sudah" type="radio" name="pernah_terdampak" id="flexRadioDefault1" required>
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Pernah
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" value="Belum" type="radio" name="pernah_terdampak" id="flexRadioDefault2" required>
                                <label class="form-check-label" for="flexRadioDefault2">
                                  Tidak
                                </label>
                            </div>
                        </div>
                        <div class="submit-button text-end">
                            <button class="btn btn-primary">Kirim Data</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-8">
                <h2 style="font-family:sans-serif;font-size:25px;font-weight: 500;margin: 0px;color:white;padding: 5px 0px;" class="text-center bg-primary">Tabel Covid-19</h2>
                <table class="table-covid table pl-3">
                    <thead>
                      <tr class="table-light">
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Suhu</th>
                        <th scope="col">Vaksinasi</th>
                        <th scope="col">Pernah Terdampak</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr class="table-light">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->suhu_tubuh }}</td>
                            <td>{{ $item->vaksinasi }}</td>
                            <td>{{ $item->pernah_terdampak }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                  <div class="pagination justify-content-center align-items-center">
                      {{ $data->links() }}
                  </div>
            </div>
        </div>
    </div>
    
@endsection
</body>
</html>