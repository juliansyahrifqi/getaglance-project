@extends('layouts.admin')

@section('title')
    Get A Glance Admin | Tambah Sosial Media
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Sosial Media</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard-admin') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('social-media.index') }}">Sosial Media</a></li>
                        <li class="breadcrumb-item active">Tambah Sosial Media</li>
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
                        <h3 class="card-title">Form Tambah Sosial media</h3>
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

                    <form action="{{ route('social-media.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf

                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Nama Sosial Media</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Nama Sosial Media (Instagram, Twitter, dll)">
                            </div>

                            <div class="form-group">
                                <label for="account_name">Nama Akun</label>
                                <input type="text" id="account_name" name="account_name" class="form-control" placeholder="Nama Akun">
                            </div>
                       
                            <div class="form-group">
                                <label>Link Akun</label>
 
                                <input type="text" id="link" name="link" class="form-control" placeholder="Link Akun (Ex: instagram.com/getaglance)">                
                            </div>
    
                            <label for="icon">Icon Sosial Media</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="icon" name="icon">
                                    <label class="custom-file-label" for="icon">Choose file</label>
                                </div>
                            </div>
    
                            <img id="perview" src="" class="mt-3"> 
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-block">Tambah Sosial Media</button>
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

        $('#icon').change(function() {
            readUrl(this);
            console.log('true');
        })
    </script>
@endpush