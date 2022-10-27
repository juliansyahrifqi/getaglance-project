@extends('layouts.admin')

@section('title')
    {{ config('app.name') }} Admin | Quote Section
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Quote Section</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard-admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Quote <Section></Section></li>
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
                                <label>Quote Title</label>
                                <textarea name="title" class="form-control" placeholder="Quote Title" rows="4" required>{{ $quote->title }}</textarea>
                            </div>
                        </div>
    
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control" placeholder="Quote Description" rows="4" required>{{ $quote->description }}</textarea>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success mt-4">Edit Quote</button>
                </form>
            </div>
        </div>
    </section>
@endsection