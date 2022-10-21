@extends('layouts.admin')

@section('title')
    Get A Glance Admin | Tambah Produk
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Produk</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard-admin') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('produk.index') }}">Produk</a></li>
                        <li class="breadcrumb-item active">Tambah Produk</li>
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
                        <h3 class="card-title">Form Tambah Produk</h3>
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

                    <form action="{{ route('produk.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf

                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Nama Produk</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Nama Produk">
                            </div>
                            

                            <div class="form-group">
                              <label>Kategori Produk</label>
                              <select class="form-control select2" style="width: 100%;" name="kategori_id">
                                @foreach($categories as $category) 
                                  <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                                @endforeach
                              </select>
                            </div>

                            <div class="form-group">
                                <label for="link">Link Produk</label>
                                <input type="text" id="link" name="link" class="form-control" placeholder="Link Produk (Ex: https://www.shopee.co.id)">
                            </div>
    
                            <label for="kategori-image">Gambar Kategori</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                            </div>
    
                            <img id="perview" src="" class="mt-3"> 
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-block">Tambah Produk</button>
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