@extends('layouts.admin')

@section('title')
    {{ config('app.name') }} | Add Sosial Media
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Social Media</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard-admin') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('social-media.index') }}">Social Media</a></li>
                        <li class="breadcrumb-item active">Add Social Media</li>
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
                        <h3 class="card-title">Form Add Social Media</h3>
                    </div>

                    <form action="{{ route('social-media.store') }}" enctype="multipart/form-data" method="POST">
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
                                <label for="name">Social Media Name</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Social Media Name (Instagram, Twitter, dll)" value="{{ old('name') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="account_name">Account Name</label>
                                <input type="text" id="account_name" name="account_name" class="form-control" placeholder="Account Name" value="{{ old('account_name') }}" required>
                            </div>
                       
                            <div class="form-group">
                                <label>Account Link</label>
 
                                <input type="text" id="link" name="link" class="form-control" placeholder="Account Link (Ex: instagram.com/getaglance)" value="{{ old('link') }}" required>                
                            </div>
    
                            <label for="icon">Social Media Icon</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="icon" name="icon">
                                    <label class="custom-file-label" for="icon">Choose file</label>
                                </div>
                            </div>
    
                            <img id="perview" src="" class="mt-3"> 
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-block">Add Social Media</button>
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