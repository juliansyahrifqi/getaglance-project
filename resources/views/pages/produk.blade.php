@extends('layouts.app')

@section('title')
    Get A Glance
@endsection

@section('content')
<main class="produk-page py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mt-3">
                    <div class="card card-filter-produk border-0">
                        <div class="card-header bg-white">
                            <h5 class="m-0 card-filter-title">Kategori</h5>
                        </div>
                    
                        <div class="card-body">
                            @foreach($categories as $category)
                                <p class="card-filter-kategori-list"><a role="button">{{ $category->nama_kategori }}</a></p>
                            @endforeach
                        </div>

                      </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-4 mt-3">
                            <a href="https://shopee.co.id/" target="_blank" noreferrer class="text-decoration-none">
                                <div class="card border-0 h-100">
                                    <img class="card-product-image" src="./assets/produk-1.jpg" alt="Card image cap">
                                    <div class="card-body px-0">
                                      <h5 class="card-title card-product-title text-center m-0">Dress Warna Merah</h5>
                                      <p class="card-text card-product-price text-center mt-1">
                                        Rp. 130.000
                                      </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 mt-3">
                            <a href="https://shopee.co.id/" target="_blank" noreferrer class="text-decoration-none">
                                <div class="card border-0 h-100">
                                    <img class="card-product-image" src="./assets/produk-2.jpg" alt="Card image cap">
                                    <div class="card-body px-0">
                                      <h5 class="card-title card-product-title text-center m-0">Dress Warna Merah</h5>
                                      <p class="card-text card-product-price text-center mt-1">
                                        Rp. 130.000
                                      </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 mt-3">
                            <a href="https://shopee.co.id/" target="_blank" noreferrer class="text-decoration-none">
                                <div class="card border-0 h-100">
                                    <img class="card-product-image" src="./assets/produk-3.jpg" alt="Card image cap">
                                    <div class="card-body px-0">
                                      <h5 class="card-title card-product-title text-center m-0">Dress Warna Merah</h5>
                                      <p class="card-text card-product-price text-center mt-1">
                                        Rp. 130.000
                                      </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 mt-3">
                            <a href="https://shopee.co.id/" target="_blank" noreferrer class="text-decoration-none">
                                <div class="card border-0 h-100">
                                    <img class="card-product-image" src="./assets/produk-3.jpg" alt="Card image cap">
                                    <div class="card-body px-0">
                                      <h5 class="card-title card-product-title text-center m-0">Dress Warna Merah</h5>
                                      <p class="card-text card-product-price text-center mt-1">
                                        Rp. 130.000
                                      </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 mt-3">
                            <a href="https://shopee.co.id/" target="_blank" noreferrer class="text-decoration-none">
                                <div class="card border-0 h-100">
                                    <img class="card-product-image" src="./assets/produk-2.jpg" alt="Card image cap">
                                    <div class="card-body px-0">
                                      <h5 class="card-title card-product-title text-center m-0">Dress Warna Merah</h5>
                                      <p class="card-text card-product-price text-center mt-1">
                                        Rp. 130.000
                                      </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 mt-3">
                            <a href="https://shopee.co.id/" target="_blank" noreferrer class="text-decoration-none">
                                <div class="card border-0 h-100">
                                    <img class="card-product-image" src="./assets/produk-1.jpg" alt="Card image cap">
                                    <div class="card-body px-0">
                                      <h5 class="card-title card-product-title text-center m-0">Dress Warna Merah</h5>
                                      <p class="card-text card-product-price text-center mt-1">
                                        Rp. 130.000
                                      </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection