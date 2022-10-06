@extends('datas.layout')
 
@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Form Data Covid</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('data.create') }}"> Buat Data Baru</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Alamat</th>
            <th width="280px">Aksi</th>
        </tr>
        @foreach ($datas as $data)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->alamat }}</td>
            <td>
                <form action="{{ route('data.destroy',$data->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('data.show',$data->id) }}">Show</a>
    
                    {{-- <a class="btn btn-warning" href="{{ route('datas.edit',$student->id) }}">Edit</a> --}}
   
                    @csrf
                    @method('DELETE')
      
                    {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="row text-center">
        {!! $datas->links() !!}
    </div>
    <a class="btn btn-primary" href="/" role="button">Kembali</a>
      
@endsection