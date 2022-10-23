@extends('layouts.admin')

@section('title')
    Get A Glance Admin | Tambah Talent
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Talent</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard-admin') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('talent.index') }}">Talent</a></li>
                        <li class="breadcrumb-item active">Tambah Talent</li>
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
                        <h3 class="card-title">Form Tambah Talent</h3>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('talent.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf

                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Nama Talent</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Nama Talent" value="{{ old('name') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="title">Instagram Talent</label>
                                <input type="text" id="instagram" name="instagram" class="form-control" placeholder="Nama Instagram Talent" value="{{ old('instagram') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="title">Pekerjaan Talent</label>
                                <input type="text" id="pekerjaan" name="pekerjaan" class="form-control" placeholder="Pekerjaan Talent" value="{{ old('pekerjaan') }}" required>
                            </div>
    
                            <label for="kategori-image">Foto Talent</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                            </div>
    
                            <img id="perview" src="" class="mt-3"> 
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-block">Tambah Talent</button>
                        </div>
                    </form>
                </div>
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
            console.log('true');
        })
    </script>
@endpush