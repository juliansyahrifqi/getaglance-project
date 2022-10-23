@extends('layouts.admin')

@section('title')
    Get A Glance Admin | Talent Section
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Halaman Afiliasi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard-admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Halaman Afiliasi</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content py-2">
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="card card-primary">
                    <form action="{{ route('afiliasi.update', 1) }}" enctype="multipart/form-data" method="POST">
                        @method('PUT')
                        @csrf

                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    {{ $message }}
                                </div>
                            @endif
                            
                        
                            <div class="form-group">
                                <label for="title">Judul</label>
                                <input type="text" id="title" name="title" class="form-control" placeholder="Nama Judul" value="{{ $afiliasi->title }}" required>
                            </div>
    
                            <div class="form-group">
                                <label for="description">Isi Halaman</label>
                                <textarea id="description" class="form-control" rows="4" name="description" placeholder="Deskripsi" required>{{ $afiliasi->description }}</textarea>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-block">Ubah</button>
                        </div>
                    </form>
                    <!-- /.card-body -->
                </div>
                 <!-- /.card -->
            </div>
        </div>
    </section>
    
@endsection

@push('addon-script')
    <script>
        $(function () {
            // Summernote
            $('#description').summernote({
                height: 300
            });
        })
    </script>
@endpush