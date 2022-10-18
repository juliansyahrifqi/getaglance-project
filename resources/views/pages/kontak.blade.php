@extends('layouts.app')

@section('title')
    Get A Glance | Artikel
@endsection

@section('content')
    <main class="contact-page py-5">
        <div class="container">
            <h2 class="contact-page-title text-center">{{ $kontak->title }}</h2>

            <div class="contact-description text-center mt-5">
                {!! $kontak->description !!}
            </div>
        </div>
    </main>
@endsection