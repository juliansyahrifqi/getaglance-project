@extends('layouts.admin')

@section('title')
    Get A Glance Admin | Tambah Slider
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Slider</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard-admin') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('slider.index') }}">Slider</a></li>
                        <li class="breadcrumb-item active">Ubah Slider</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content py-5">
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Ubah Slider</h3>
                    </div>

                    <form action="{{ route('slider.update', $slider->id) }}" enctype="multipart/form-data" method="POST">
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
                            
                            <div class="form-group">
                                <label for="title">Judul Slider</label>
                                <input type="text" id="title" name="title" class="form-control" placeholder="Nama Judul" value="{{ $slider->title }}">
                            </div>
    
                            <div class="form-group">
                                <label for="description">Deskripsi Slider</label>
                                <textarea id="description" class="form-control" rows="4" name="description" placeholder="Deskripsi">{{ $slider->description }}</textarea>
                            </div>
    
                            <label for="slider-image">Gambar Slider</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                            </div>
    
                            <img id="perview" src="{{ Storage::url($slider->image) }}" style="width:25%" class="mt-3"> 
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-block">Ubah Slider</button>
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
        function readUrl(input) {
            if(input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    $('#perview').attr('src', e.target.result);
                    $('#perview').attr('width', '25%');
                    $('#perview').attr('height', '25%');
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        $('#image').change(function() {
            readUrl(this);
        })
    </script>
@endpush