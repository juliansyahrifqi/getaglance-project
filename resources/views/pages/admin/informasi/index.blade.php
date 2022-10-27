@extends('layouts.admin')

@section('title')
    {{ config('app.name') }} Admin | Information
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Information</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard-admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Information</li>
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
                    <form action="{{ route('informasi.update', 1) }}" enctype="multipart/form-data" method="POST">
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
                            
                            <img id="perview" src="{{ Storage::url($informasi->image) }}" style="width:50%" class="mt-3 d-block mx-auto img-thumbnail img-fluid">

                            <div class="form-group">
                                <label for="title">Name</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Nama" value="{{ $informasi->name }}" required>
                            </div>
    
                            <div class="form-group">
                                <label for="description">Short Description</label>
                                <textarea id="description" class="form-control" rows="4" name="description" placeholder="Deskripsi" required>{{ $informasi->description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="title">Whatsapp Number</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">+62</span>
                                    </div>
                                    <input type="number" id="whatsapp" name="whatsapp" class="form-control" placeholder="Nomor Whatsapp" value="{{ $informasi->whatsapp }}" required>
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{ $informasi->email }}" required>
                            </div>

                            <label for="slider-image">Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                            </div> 
                            <span class="text-danger">*Leave blank if not replace image</span>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-block">Edit</button>
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