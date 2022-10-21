@extends('layouts.admin')

@section('title')
    Get A Glance Admin | Slider
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Produk</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard-admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Produk</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('produk.create') }}" class="btn btn-success">
                                <i class="fas fa-plus"></i>
                                Tambah Produk
                            </a>
                        </div>
                        <div class="card-body">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    {{ $message }}
                                </div>
                            @endif

                            <table id="myTable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Gambar</th>
                                        <th>Nama Produk</th>
                                        <th>Kategori</th>
                                        <th>Link Produk</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($products->isEmpty())
                                        <div class="alert alert-danger">
                                            Data produk tidak ada
                                        </div>
                                    @else
                                        @php $i = 1; @endphp

                                        @foreach($products as $product) 
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>
                                                    <img src="{{ Storage::url($product->image) }}"  alt="{{ $product->name }}" style="width: 150px;">
                                                </td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->kategori->nama_kategori }}</td>
                                                <td>
                                                  <a href="{{ $product->link }}" target="_blank">
                                                    {{ $product->link }}
                                                  </a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-info btn-sm" href="{{ route('produk.edit', $product->id) }}">
                                                        <i class="fas fa-edit"></i>
                                                        Edit
                                                    </a>

                                                    <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{$product->id}}">
                                                        <i class="fas fa-trash"></i>
                                                        Hapus
                                                    </a>
                                                </td>
                                            </tr>

                                            <div class="modal fade" id="deleteModal{{ $product->id }}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div   div class="modal-header">
                                                            <h4 class="modal-title">Hapus Kategori</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Kategori yang dipilih akan dihapus</p>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <form action="{{ route('produk.destroy', $product->id) }}" method="POST">
                                                                @method('delete')
                                                                @csrf                                                
                                                                <button type="submit" class="btn btn-danger">
                                                                    Hapus
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection