@extends('layouts.admin')

@section('title')
    {{ config('app.name') }} Admin | Talent List
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Talent</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard-admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Talent</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content py-2">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('talent.create') }}" class="btn btn-success">
                    <i class="fas fa-plus"></i>
                    Add Talent
                </a>
            </div>
        
            <div class="card-body">
                @if($talents->isEmpty()) 
                    <div class="alert alert-danger">
                        Talent Not Found
                    </div>
                @else
                    <div class="row">
                        @foreach($talents as $talent)
                            <div class="col-md-4">
                                <div class="card card-widget widget-user shadow">
                                    <div class="widget-user-header bg-info">
                                        <h3 class="widget-user-username">{{ $talent->name }}</h3>
                                        <h5 class="widget-user-desc">{{ $talent->pekerjaan }}</h5>
                                    </div>
                                    <div class="widget-user-image">
                                        <img class="img-circle elevation-2" src="{{ Storage::url($talent->image) }}" alt="{{ $talent->name}}-img">
                                    </div>
                                    <div class="card-body mt-5">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <img src="/assets/icon/instagram.svg" alt="Instagram-icon">
                                            <p class="my-0 ml-2">{{ $talent->instagram }}</p>
                                        </div>
                                    </div>
                                    <div class="card-footer py-4 text-center">
                                        <a class="btn btn-info btn-sm" href="{{ route('talent.edit', $talent->id) }}">
                                            <i class="fas fa-edit"></i>
                                            Edit
                                        </a>
    
                                        <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{$talent->id}}">
                                            <i class="fas fa-trash"></i>
                                            Delete
                                        </a>
                                    </div>
    
                                    <div class="modal fade" id="deleteModal{{ $talent->id }}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div   div class="modal-header">
                                                    <h4 class="modal-title">Delete Talent</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>The selected talent will be deleted. Press delete when you want to delete it</p>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <form action="{{ route('talent.destroy', $talent->id) }}" method="POST">
                                                        @method('delete')
                                                        @csrf                                                
                                                        <button type="submit" class="btn btn-danger">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </section>
    
@endsection
