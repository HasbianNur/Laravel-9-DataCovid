@extends('products.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Data : {{ $product->name }}</h2>
            </div>
        </div>
    </div>
     
    {{-- <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $product->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $product->detail }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <img src="/image/{{ $product->image }}" width="500px">
            </div>
        </div>
    </div> --}}

    {{-- <div class="card mb-3" style="max-width: 1000px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="/storage/image/{{ $product->vaksin1 }}" class="img-fluid rounded-start" alt="gambar">
            <hr>
            <img src="/storage/image/{{ $product->vaksin2 }}" class="img-fluid rounded-start" alt="gambar">
            <hr>
            <img src="/storage/image/{{ $product->vaksin3 }}" class="img-fluid rounded-start" alt="gambar">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Data Penduduk</h5>
              <p class="card-text">Name         : {{ $product->name }}</p>
              <p class="card-text">Kelas        : {{ $product->kelas }}</p>
              <p class="card-text">Alamat       : {{ $product->alamat }}</p>
              <p class="card-text">Suhu         : {{ $product->suhu }}</p>
              <p class="card-text">Vaksin Ke    : {{ $product->vaksin }}</p>
              <p class="card-text">Pernah Covid : {{ $product->covid }}</p>
              <a class="btn btn-primary" href="{{ route('products.index') }}"> Kembali</a>
            </div>
          </div>
        </div>
    </div> --}}

    {{-- <div class="card-group">
        <div class="card">
          <img src="/storage/image/{{ $product->vaksin1 }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Vaksin 1</h5>
              <p class="card-text">Name         : {{ $product->name }}</p>
              <p class="card-text">Kelas        : {{ $product->kelas }}</p>
              <p class="card-text">Alamat       : {{ $product->alamat }}</p>
              <p class="card-text">Suhu         : {{ $product->suhu }}</p>
              <p class="card-text">Pernah Covid : {{ $product->covid }}</p>
          </div>
        </div>
        <div class="card">
          <img src="/storage/image/{{ $product->vaksin2 }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Vaksin 2</h5>
              <p class="card-text">Name         : {{ $product->name }}</p>
              <p class="card-text">Kelas        : {{ $product->kelas }}</p>
              <p class="card-text">Alamat       : {{ $product->alamat }}</p>
              <p class="card-text">Suhu         : {{ $product->suhu }}</p>
              <p class="card-text">Pernah Covid : {{ $product->covid }}</p>
          </div>
        </div>
        <div class="card">
          <img src="/storage/image/{{ $product->vaksin3 }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Vaksin 3</h5>
              <p class="card-text">Name         : {{ $product->name }}</p>
              <p class="card-text">Kelas        : {{ $product->kelas }}</p>
              <p class="card-text">Alamat       : {{ $product->alamat }}</p>
              <p class="card-text">Suhu         : {{ $product->suhu }}</p>
              <p class="card-text">Pernah Covid : {{ $product->covid }}</p>
          </div>
        </div>
    </div> --}}

    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <img src="/storage/image/{{ $product->vaksin1 }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Vaksin 1</h5>
              <p class="card-text">Nama         : {{ $product->name }}</p>
              <p class="card-text">Kelas        : {{ $product->kelas }}</p>
              <p class="card-text">Alamat       : {{ $product->alamat }}</p>
              <p class="card-text">Suhu         : {{ $product->suhu }}</p>
              <p class="card-text">Pernah Covid : {{ $product->covid }}</p>
          </div>
          <div class="card-footer">
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="/storage/image/{{ $product->vaksin2 }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Vaksin 2</h5>
              <p class="card-text">Nama         : {{ $product->name }}</p>
              <p class="card-text">Kelas        : {{ $product->kelas }}</p>
              <p class="card-text">Alamat       : {{ $product->alamat }}</p>
              <p class="card-text">Suhu         : {{ $product->suhu }}</p>
              <p class="card-text">Pernah Covid : {{ $product->covid }}</p>
          </div>
          <div class="card-footer">
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="/storage/image/{{ $product->vaksin3 }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Vaksin 3</h5>
              <p class="card-text">Nama          : {{ $product->name }}</p>
              <p class="card-text">Kelas        : {{ $product->kelas }}</p>
              <p class="card-text">Alamat       : {{ $product->alamat }}</p>
              <p class="card-text">Suhu         : {{ $product->suhu }}</p>
              <p class="card-text">Pernah Covid : {{ $product->covid }}</p>
          </div>
          <div class="card-footer">
          </div>
        </div>
      </div>
    </div>
    <br>
    <a class="btn btn-primary" href="/dashboard" role="button">Kembali</a>
@endsection