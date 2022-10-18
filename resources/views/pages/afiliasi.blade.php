@extends('layouts.app')

@section('title')
    Get A Glance | Artikel
@endsection

@section('content')
    <<main class="affiliate-page py-5">
        <div class="container">
            <h2 class="affiliate-page-title text-center">{{ $afiliasi->title }}</h2>
            
            <div class="affiliate-description mt-5">
                {!! $afiliasi->description !!}
            </div>
        </div>
    </main>
@endsection