@extends('layouts.admin')

@section('title')
    {{ config('app.name') }} Admin | Add Product
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Product</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard-admin') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('produk.index') }}">Product</a></li>
                        <li class="breadcrumb-item active">Add Product</li>
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
                        <h3 class="card-title">Form Add Product</h3>
                    </div>

                    <form action="{{ route('produk.store') }}" enctype="multipart/form-data" method="POST">
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
                                <label for="name">Product Name</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Product Name" value="{{ old('name') }}" required>
                            </div>
                            

                            <div class="form-group">
                              <label>Product Category</label>
                              <select class="form-control select2" style="width: 100%;" name="kategori_id" required>
                                @foreach($categories as $category) 
                                  <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                                @endforeach
                              </select>
                            </div>

                            <div class="form-group">
                                <label for="link">Product Link</label>
                                <input type="text" id="link" name="link" class="form-control" placeholder="Link Produk (Ex: https://www.shopee.co.id)" value="{{ old('link') }}" required>
                            </div>

                            <label for="link">Recomendation</label>
                            <div class="form-group clearfix">
                                <div class="icheck-success">
                                    <input type="radio" id="rekomendasi1" name="rekomendasi"  value="1" checked>
                                    <label for="rekomendasi1">
                                        Yes
                                    </label>
                                </div>

                                <div class="icheck-danger">
                                    <input type="radio" id="rekomendasi2" name="rekomendasi" value="0">
                                    <label for="rekomendasi2">
                                        No
                                    </label>
                                </div>
                            </div>
    
                            <label for="kategori-image">Product Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                            </div>
                            
    
                            <img id="perview" src="" class="mt-3"> 
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-block">Add Produk</button>
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