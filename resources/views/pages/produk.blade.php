@extends('layouts.app')

@section('title')
    {{ config('app.name') }} | Product
@endsection

@section('content')
    <main class="produk-page py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mt-3">
                    <div class="card card-filter-produk border-0">
                        <div class="card-header bg-white">
                            <h5 class="m-0 card-filter-title">Category</h5>
                        </div>
                    
                        <div class="card-body">
                            @foreach($categories as $category)
                                <p class="card-filter-kategori-list"><a role="button" href="{{ route('produk-kategori', $category->slug) }}" class="card-filter-kategori-list text-decoration-none">{{ $category->nama_kategori }}</a></p>
                            @endforeach
                        </div>

                      </div>
                </div>
                <div class="col-lg-9 mt-3">
                    <div class="row">
                        @if($products->isEmpty())
                            <div class="col-12">
                                <div class="alert alert-danger">
                                    Product Not Found
                                </div>
                            </div>
                        @else
                            @foreach($products as $product)
                                <div class="col-12 col-lg-4">
                                    <div class="card border-0 h-100">
                                        <img class="card-product-image w-100" src="{{ Storage::url($product->image) }}" alt="{{ $product->name}}-img">
                                        <div class="card-body px-0 text-center">
                                            <h5 class="card-title card-product-title text-center m-0">{{ $product->name }}</h5>

                                            <p class="card-text card-product-price text-center mt-2 mb-1">
                                                {{ $product->kategori->nama_kategori }}
                                            </p>
                                            
                                            <a href="{{ $product->link }}" target="_blank">
                                                <div class="d-flex align-items-center justify-content-center mt-2">    
                                                    <img src="/assets/icon/shopee.svg" alt="shopee" class="img-fluid mr-2">    
                                                          
                                                    <p class="card-text card-product-price mt-0 text-center">
                                                        Shop on Shopee
                                                    </p>
                                                </div>
                                            </a>

                                            <a href="{{ $product->tiktok_link }}" target="_blank">
                                                <div class="d-flex align-items-center justify-content-center mt-2">    
                                                    <img src="/assets/icon/tiktok.svg" alt="tiktok" class="img-fluid mr-2">    
                                                          
                                                    <p class="card-text card-product-price mt-0 text-center">
                                                        Shop on Tiktok
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            @endforeach
                        @endif
                    </div>

                    <div class="text-center mt-4">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection