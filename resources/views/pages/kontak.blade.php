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

            <div class="d-flex flex-wrap justify-content-center">
                <div class="d-flex align-items-center mt-2 mx-2">
                    <div class="btn btn-outline-light">
                        <img class="whatsapp-icon" src="/assets/icon/whatsapp.svg" alt="wa-icon">
                    </div>
                    <p class="mb-0 ml-2 text-footer">+{{ $information->whatsapp }}</p>
                </div>
    
                <div class="d-flex align-items-center mt-2 mx-2">
                    <div class="btn btn-outline-light">
                        <img class="whatsapp-icon" src="/assets/icon/email.svg" alt="email-icon">
                    </div>
                    <p class="mb-0 ml-2 text-footer">{{ $information->email }}</p>
                </div>
    
                @foreach($socials as $social)
                    <div class="d-flex align-items-center mt-2 mx-2">
                        <div class="btn btn-outline-light">
                            <img class="whatsapp-icon" src="{{ Storage::url($social->icon) }}" alt="">
                        </div>
                        <p class="mb-0 ml-2 text-footer">{{ $social->account_name }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection