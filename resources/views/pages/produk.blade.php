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
                        @if($products->isEmpty())
                            <div class="col-12">
                                <div class="alert alert-danger">
                                    Produk Tidak Ada
                                </div>
                            </div>
                        @else
                            @foreach($products as $product)
                                <div class="col-12 col-lg-4 mt-3">
                                    <a href="{{ $product->link }}" target="_blank" noreferrer class="text-decoration-none">
                                        <div class="card border-0 h-100">
                                            <img class="card-product-image w-100" src="{{ Storage::url($product->image) }}" alt="{{ $product->name}}-img">
                                            <div class="card-body px-0 text-center">
                                                <h5 class="card-title card-product-title text-center m-0">{{ $product->name }}</h5>

                                                <p class="card-text card-product-price text-center mt-2 mb-1">
                                                    {{ $product->kategori->nama_kategori }}
                                                </p>

                                                <p href="{{ $product->link }}" target="_blank" class="card-text card-product-price mt-0 text-cecnter">
                                                    {{ $product->link }}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection