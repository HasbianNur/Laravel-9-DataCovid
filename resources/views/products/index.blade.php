@extends('products.layout')
     
@section('content')
    {{-- <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Home Page</h2>
                <a class="btn btn-success" href="{{ route('products.create') }}"> Buat Data Baru</a>
                <a class="btn btn-primary" href="dashboard"> Kembali</a>
                <hr>
            </div>
        </div>
    </div> --}}

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    {{-- <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Suhu</th>
            <th>Vaksin Ke</th>
            <th>Sudah Pernah Covid</th>
            <th>Sertifikat</th>
            <th width="280px">Aksi</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->kelas }}</td>
            <td>{{ $product->alamat }}</td>
            <td>{{ $product->suhu }}</td>
            <td>{{ $product->vaksin }}</td>
            <td>{{ $product->covid }}</td>
            <td><img src="/image/{{ $product->image }}" width="100px"></td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
      
                    <a class="btn btn-warning" href="{{ route('products.edit',$product->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $products->links() !!} --}}

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataCovid</h6>
            <a href="dashboard">Kembali</a>
            <a href="products/create">Buat Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>Alamat</th>
                            <th>Suhu</th>
                            <th>Sudah Pernah Vaksin</th>
                            <th>Vaksin 1</th>
                            <th>Vaksin 2</th>
                            <th>Vaksin 3</th>
                            <th width="280px">Aksi</th>
                        </tr>
                    </thead>
                    @foreach ($products as $product)
                        <tbody>
                            <tr>
                                <th>{{ ++$i }}</th>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->kelas }}</td>
                                <td>{{ $product->alamat }}</td>
                                <td>{{ $product->suhu }}</td>
                                <td>{{ $product->covid }}</td>
                                <td><img src="/storage/image/{{ $product->vaksin1 }}" width="100px"></td>
                                <td><img src="/storage/image/{{ $product->vaksin2 }}" width="100px"></td>
                                <td><img src="/storage/image/{{ $product->vaksin3 }}" width="100px"></td>
                                <td>
                                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                         
                                        <a class="btn btn-info" href="{{ route('products.show',$product->id) }}"><i class="bi bi-eye-fill"></i></a>
                          
                                        <a class="btn btn-warning" href="{{ route('products.edit',$product->id) }}"><i class="bi bi-pencil-fill"></i></a>
                         
                                        @csrf
                                        @method('DELETE')
                            
                                        <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#logoutModal"><i class="bi bi-trash-fill"></i></button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Hapus Data?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pencet Hapus Jika Ingin Hapus Data</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/logout">Hapus</a>
                </div>
            </div>
        </div>
    </div>
        
@endsection

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>