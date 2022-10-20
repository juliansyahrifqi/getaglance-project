@extends('layouts.app')

@section('title')
    Get A Glance | Artikel
@endsection

@section('content')
<main class="talent-page py-5">
        <div class="container">
            <h2 class="talent-page-title text-center">Our Talent</h2>

            <div class="row mt-4">
                @if($talents->isEmpty()) 
                    <div class="alert alert-danger w-100">
                        Talent Tidak Ditemukan
                    </div>
                @else
                    @foreach($talents as $talent)
                        <div class="col-12 mt-4">
                            <div class="card p-3">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <img src="{{ Storage::url($talent->image) }}" alt="{{ $talent->name}}-img" class="img-fluid img-talent-page">
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex flex-column">
                                            <h1 class="talent-name">{{ $talent->name }}</h1>
                                            <p class="talent-job">{{ $talent->pekerjaan }}</p>

                                            <div class="d-flex align-items-center mt-3">
                                                <img src="/assets/icon/instagram.svg" alt="Instagram">
                                                <p class="talent-description my-0 ml-2">{{ $talent->instagram }}</p>
                                            </div>
                                            
                                            <a href="https://wa.me/{{ $whatsapp }}?text=Halo%2C%20Glance.%20Saya%20mau%20konsultasi%20dengan%20talent%20{{$talent->name}}" class="btn btn-konsul-talent mt-5">
                                                Mulai Konsultasi
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </main>
@endsection