@extends('layouts.app')

@section('title')
    Get A Glance
@endsection

@section('content')
<main class="main-page pb-5">
        <!-- Swiper Carousel -->
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                @foreach($sliders as $slider)
                  <div class="swiper-slide">
                      <img src="{{ Storage::url($slider->image) }}" alt="{{ $slider->title }}">

                        <div class="swiper-content">
                          <h2 class="swiper-content-title">{{ $slider->title }}</h2>
                          <p class="swiper-content-description mt-4">
                            {{ $slider->description }}
                          </p>
                          
                          <a href="/produk" class="text-decoration-none btn btn-swiper-content rounded-0 px-5 py-2 mt-4">
                            Shop Now
                          </a>
                        </div>                    
                  </div>
                @endforeach
            </div>
            <div class="swiper-pagination mb-3"></div>
        </div>
        <!-- End of Swiper -->

        <!-- Category Section -->
        <section class="category py-5">
            <h1 class="h2 category-title text-center">Category</h1>
            <div class="container category-wrapper mt-5">
                <div class="row category-list-wrapper">
                    @foreach($categories as $category)
                      <div class="col-12 col-md-4 mt-2">
                          <a href="{{ route('produk-kategori', $category->slug) }}" class="text-decoration-none">
                              <div class="category-list d-flex flex-column justify-content-center align-items-center" style="background: url('{{ Storage::url($category->image) }}') no-repeat top center;
                              background-size: cover;
                              height: 50vh;
                              transition: all 0.3s;
                              cursor: pointer;">
                                  <h3 class="category-list-title text-white">{{ $category->nama_kategori }}</h3>
                                  <button class="btn-category-list mt-2 px-4 py-2">See More</button>
                              </div>
                          </a>
                      </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End of Category Section -->

        <!-- Section Class Talent -->
        <section class="talent py-5">
          <div class="container talent-wrapper">
            <div class="row align-items-center">
              <div class="col-sm">
                <div class="talent-image">
                  <img src="/assets/talent.png" alt="" class="img-talent img-fluid">
                </div>
              </div>

              <div class="col-sm ml-4 mt-4">
                <div class="talent-divider d-flex align-items-center mb-4">
                  <hr class="talent-title-divider">
                  <p class="my-0 ml-3 talent-title">{{ $talentSection->title }}</p>
                </div>

                <div class="talent-content">
                  <h2>{{ $talentSection->subtitle }}</h2>
  
                  <p class="talent-description">
                    {{ $talentSection->description }}
                  </p>
  
                  <a href="/talent" type="button" class="btn-talent mt-4 text-decoration-none">See More ...</a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End of Section Talent -->

        <!-- Section Quote -->
        <section class="quote">
          <div class="container">
            <div class="quote-wrapper d-flex flex-column align-items-center justify-content-center">
              <h1 class="h4 quote-title text-center">{{ $quote->title }}</h1>
              <p class="mt-3 quote-description text-center"><i>{{ $quote->description }}</i></p>
            </div>
          </div>
        </section>
        <!-- End of Section Quote -->

        <!-- Section Article -->
        <section class="produk-rekomendasi py-5">
          <div class="container produk-rekomendasi-wrapper">
            <h1 class="h2 article-title text-center">Product Recomendation</h1>

            <div class="row">
              @if($products->isEmpty())
                <div class="col-12">
                  <div class="alert alert-info">
                    Product Not Found
                  </div>
                </div>
              @else
                @foreach($products as $product)
                  <div class="col-md-6 col-lg-4 mt-4">
                    <div class="card card-article h-100 border-0 text-center">
                      <img class="card-img-top" src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}">

                      <div class="card-body px-0">
                        <h3 class="card-title card-article-title">{{ $product->name }}</h5>
                        <p class="card-text card-product-price text-center mt-2 mb-1">
                          {{ $product->kategori->nama_kategori }}
                        </p>
                
                        <a href="{{ $product->link }}" class="btn btn-article py-2 mt-3">Shop Now</a>
                      </div>
                    </div>
                  </div>
                @endforeach
              @endif
            </div>
          </div>
        </section>
        <!-- End of Article -->
    </main>
@endsection

@push('addon-script')
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script type="module">
        import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.esm.browser.min.js';
      
        const swiper = new Swiper('.swiper', {
            pagination: {
                el: ".swiper-pagination"
        },
    });
    </script>
@endpush