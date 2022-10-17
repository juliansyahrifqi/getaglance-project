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
                    <h1 class="m-0">Quote</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard-admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Quote</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card p-3">

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @endif

                <form action="{{ route('quote.update', 1) }}" method="POST">
                    @method('PUT')
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Judul</label>
                                <textarea name="title" class="form-control" placeholder="Masukkkan Judul Quote" rows="4">{{ $quote->title }}</textarea>
                            </div>
                        </div>
    
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea name="description" class="form-control" placeholder="Masukkan Deskripsi Quote" rows="4">{{ $quote->description }}</textarea>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success mt-4">Ubah Quote</button>
                </form>
            </div>
        </div>
    </section>

    

@endsection