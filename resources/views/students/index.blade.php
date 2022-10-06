@extends('students.layout')
 
@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Latihan Laravel CRUD</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('students.create') }}"> Buat Data Baru</a>
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
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Suhu</th>
            <th>Vaksin Ke</th>
            <th>Sudah Pernah Covid?</th>
            <th width="280px">Aksi</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->kelas }}</td>
            <td>{{ $student->alamat }}</td>
            <td>{{ $student->suhu }}</td>
            <td>{{ $student->vaksin }}</td>
            <td>{{ $student->covid }}</td>
            <td>
                <form action="{{ route('students.destroy',$student->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('students.show',$student->id) }}">Show</a>
    
                    <a class="btn btn-warning" href="{{ route('students.edit',$student->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="row text-center">
        {!! $students->links() !!}
    </div>
    <a class="btn btn-primary" href="dashboard" role="button">Kembali</a>
      
@endsection