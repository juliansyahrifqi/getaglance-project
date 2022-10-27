@extends('layouts.app')

@section('title')
  {{ config('app.name') }} | About
@endsection

@section('content')
<main class="about-page py-5">
      <div class="container">
        <h2 class="about-page-title text-center">{{ $tentang->title }}</h2>

        <div class="about-description mt-5">
          {!! $tentang->description !!}
        </div>
      </div>
    </main>
@endsection