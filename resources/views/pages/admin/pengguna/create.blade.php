@extends('layouts.admin')

@section('title')
    Get A Glance Admin | Tambah Admin
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Admin</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard-admin') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('pengguna.index') }}">List Admin</a></li>
                        <li class="breadcrumb-item active">Tambah Admin</li>
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
                        <h3 class="card-title">Form Tambah Admin</h3>
                    </div>

                    

                    <form action="{{ route('pengguna.store') }}" enctype="multipart/form-data" method="POST">
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
                                <label for="name">Nama Admin</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Nama Admin">
                            </div>
                            
                            <div class="form-group">
                                <label for="link">Email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email Admin">
                            </div>

                            <div class="form-group">
                                <label for="link">Password</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                            </div>

                            <div class="form-group">
                                <label for="link">Konfirmasi Password</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Konfirmasi Password">
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-block">Tambah Admin</button>
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
    <!-- Select2 -->
    <script src="/vendor/plugins/select2/js/select2.full.min.js"></script>
    
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

        $(function () {
          //Initialize Select2 Elements
          $('.select2').select2()
        })
    </script>
@endpush