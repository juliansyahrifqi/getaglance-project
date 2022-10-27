@extends('layouts.admin')

@section('title')
    {{ config('app.name') }} Admin | Talent Section
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Talent Section</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard-admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Talent Section</li>
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
                    <form action="{{ route('talent-section.update', 1) }}" enctype="multipart/form-data" method="POST">
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
                            
                            <img id="perview" src="{{ Storage::url($talentSection->image) }}" style="width:50%" class="mt-3 d-block mx-auto img-thumbnail img-fluid">

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" id="title" name="title" class="form-control" placeholder="Title" value="{{ $talentSection->title }}" required>
                            </div>
    
                            <div class="form-group">
                                <label for="description">Subtitle</label>
                                <textarea id="description" class="form-control" rows="4" name="description" placeholder="Subtitle" required>{{ $talentSection->subtitle }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea id="description" class="form-control" rows="4" name="description" placeholder="Description" required>{{ $talentSection->description }}</textarea>
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