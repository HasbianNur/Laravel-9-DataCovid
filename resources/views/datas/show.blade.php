@extends('datas.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2> Show Data</h2>
            </div>
        </div>
    </div>
   
    {{-- <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name :</strong>
                {{ $student->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kelas :</strong>
                {{ $student->kelas }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat :</strong>
                {{ $student->alamat }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Suhu Tubuh :</strong>
                {{ $student->suhu }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Vaksin Ke :</strong>
                {{ $student->vaksin }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sudah Pernah Kena Covid? :</strong>
                {{ $student->covid }}
            </div>
        </div>
    </div> --}}

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="https://images.unsplash.com/photo-1571193161738-deaba9b6cc26?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDh8fHN0dWRlbnRzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="img-fluid rounded-start" alt="Foto">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <p class="card-text"><strong>Name :</strong>
                {{ $data->name }}</p>
              <p class="card-text"><strong>Alamat :</strong>
                {{ $data->alamat }}</p>
                {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
            </div>
        </div>
    </div>
</div>
<hr>
<a class="btn btn-primary" href="{{ route('data.index') }}"> Kembali</a>
@endsection