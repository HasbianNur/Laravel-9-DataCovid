@extends('products.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Data</h2>
            </div>
        </div>
    </div>
     
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
     
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kelas:</strong>
                    <input type="text" name="kelas" value="{{ $product->kelas }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat:</strong>
                    <input type="text" name="alamat" value="{{ $product->alamat }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Suhu:</strong>
                    <input type="text" name="suhu" value="{{ $product->suhu }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Covid:</strong>
                    <input type="text" name="covid" value="{{ $product->covid }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Vaksin 1:</strong>
                    <input type="file" name="vaksin1" class="form-control" placeholder="image">
                    <br>
                    <img src="/storage/image/{{ $product->vaksin1 }}" width="195px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Vaskin 2:</strong>
                    <input type="file" name="vaksin2" class="form-control" placeholder="image">
                    <br>
                    <img src="/storage/image/{{ $product->vaksin2 }}" width="195px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Vaksin 3:</strong>
                    <input type="file" name="vaksin3" class="form-control" placeholder="image">
                    <br>
                    <img src="/storage/image/{{ $product->vaksin3 }}" width="195px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <br>
              <button type="submit" class="btn btn-success">Submit</button>
              <a class="btn btn-primary" href="{{ route('products.index') }}"> Kembali</a>
            </div>
        </div>
     
    </form>
@endsection