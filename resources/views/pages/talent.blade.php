@extends('layouts.app')

@section('title')
    Get A Glance | Artikel
@endsection

@section('content')
<main class="talent-page py-5">
        <div class="container">
            <h2 class="talent-page-title text-center">Our Talent</h2>

            <div class="row mt-4">
                <div class="col-12 mt-4">
                    <div class="card p-3">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <img src="./assets/produk-1.jpg" alt="talent-1" class="img-fluid img-talent-page">
                            </div>
                            <div class="col-6">
                                <div class="d-flex flex-column">
                                    <h1 class="talent-name">Olivia Santa</h1>
                                    <p class="talent-job">Konten Kreator</p>
                                    <p class="talent-description mt-4">Konsultasi Outfit berdasarkan talent</p>

                                    <a href="https://wa.me/6282127788165?text=Halo" class="btn btn-konsul-talent mt-5">
                                        Mulai Konsultasi
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 mt-4">
                    <div class="card card-talent-page p-3">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <img src="./assets/produk-1.jpg" alt="talent-1" class="img-fluid img-talent-page">
                            </div>
                            <div class="col-6">
                                <div class="d-flex flex-column">
                                    <h1 class="talent-name">Olivia Santa</h1>
                                    <p class="talent-job">Konten Kreator</p>
                                    <p class="talent-description mt-4">Konsultasi Outfit berdasarkan talent</p>

                                    <a href="https://wa.me/6282127788165?text=Halo" class="btn btn-konsul-talent mt-5">
                                        Mulai Konsultasi
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection