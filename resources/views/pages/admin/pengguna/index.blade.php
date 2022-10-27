@extends('layouts.admin')

@section('title')
    {{ config('app.name') }} Admin | User
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Admin List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard-admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Admin List</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('pengguna.create') }}" class="btn btn-success">
                                <i class="fas fa-plus"></i>
                                Add Admin
                            </a>
                        </div>
                        <div class="card-body">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    {{ $message }}
                                </div>
                            @endif

                            <table id="myTable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Date Created</th>
                                        <!-- <th>Aksi</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($users->isEmpty())
                                        <div class="alert alert-danger">
                                            Admin Not Found
                                        </div>
                                    @else
                                        @php $i = 1; @endphp

                                        @foreach($users as $user) 
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->created_at }}</td>
                                                {{--  <td>
                                                    <a class="btn btn-info btn-sm" href="{{ route('pengguna.edit', $user->id) }}">
                                                        <i class="fas fa-edit"></i>
                                                        Edit
                                                    </a>

                                                    <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{$user->id}}">
                                                        <i class="fas fa-trash"></i>
                                                        Hapus
                                                    </a>
                                                </td> 
                                                --}}
                                            </tr>

                                            {{--  <div class="modal fade" id="deleteModal{{ $user->id }}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div   div class="modal-header">
                                                            <h4 class="modal-title">Hapus Kategori</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Kategori yang dipilih akan dihapus</p>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <form action="{{ route('pengguna.destroy', $user->id) }}" method="POST">
                                                                @method('delete')
                                                                @csrf                                                
                                                                <button type="submit" class="btn btn-danger">
                                                                    Hapus
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            --}}
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection