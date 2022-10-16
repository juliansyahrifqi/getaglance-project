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
                            Belanja Sekarang
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
            <h1 class="h2 category-title text-center">Kategori</h1>
            <div class="container category-wrapper mt-5">
                <div class="row category-list-wrapper">
                    <div class="col-12 col-md-4 mt-2">
                        <a href="produk.html" class="text-decoration-none">
                            <div class="category-list d-flex flex-column justify-content-center align-items-center" style="background: url(/assets/category-1.webp) no-repeat top center;
                            background-size: cover;
                            height: 50vh;
                            transition: all 0.3s;
                            cursor: pointer;">
                                <h3 class="category-list-title text-white">Muslim</h3>
                                <button class="btn-category-list mt-2 px-4 py-2">Selengkapnya</button>
                            </div>
                        </a>
                    </div>

                    <div class="col-12 col-md-4 mt-2">
                      <a href="produk.html" class="text-decoration-none">
                        <div class="category-list d-flex flex-column justify-content-center align-items-center" style="background: url(/assets/category-2.webp) no-repeat center;
                        background-size: cover;
                        height: 50vh;
                        transition: all 0.3s;
                        cursor: pointer;">
                            <h3 class="category-list-title text-white">Dress</h3>
                            <button class="btn-category-list mt-2 px-4 py-2">Selengkapnya</button>
                        </div>
                      </a>
                    </div>

                    <div class="col-12 col-md-4 mt-2">
                      <a href="produk.html" class="text-decoration-none">
                        <div class="category-list d-flex flex-column justify-content-center align-items-center" style="background: url(/assets/category-3.webp) no-repeat center;
                        background-size: cover;
                        height: 50vh;
                        transition: all 0.3s;
                        cursor: pointer;">
                            <h3 class="category-list-title text-white">Category</h3>
                            <button class="btn-category-list mt-2 px-4 py-2">Selengkapnya</button>
                        </div>
                      </a>
                    </div>
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
                  <p class="my-0 ml-3 talent-title">Our Talent</p>
                </div>

                <div class="talent-content">
                  <h2>Pilih talent sesuai dengan yang kamu inginkan</h2>
  
                  <p class="talent-description">
                    Kami selalu berusaha untuk memberikan apa yang klien inginkan
                  </p>
  
                  <a href="talent.html" type="button" class="btn-talent mt-4 text-decoration-none">Lihat Selengkapnya ...</a>
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
              <h1 class="h4 quote-title text-center">Flexible Wardrobe</h1>
              <p class="mt-3 quote-description text-center"><i>Thoughtfully-designed for anything from casual and workwear to all of life's special occasions.</i></p>
            </div>
          </div>
        </section>
        <!-- End of Section Quote -->

        <!-- Section Article -->
        <section class="article py-5">
          <div class="container article-wrapper">
            <h1 class="h2 article-title text-center">Artikel</h1>
            <div class="row">
              <div class="col-md-6 col-lg-4 mt-4">
                <div class="card card-article h-100 border-0 text-center">
                  <img class="card-img-top" src="/assets/article-1.jpg" alt="Card image cap">
                  <div class="card-body px-0">
                    <h3 class="card-title card-article-title text-uppercase">Title</h5>
                    <p class="card-text card-article-description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-article py-2">Go somewhere</a>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-4 mt-4">
                <div class="card card-article h-100 border-0 text-center">
                  <img class="card-img-top" src="/assets/article-2.jpg" alt="Card image cap">
                  <div class="card-body px-0">
                    <h3 class="card-title card-article-title text-uppercase">Title</h5>
                    <p class="card-text card-article-description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-article py-2">Go somewhere</a>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-4 mt-4">
                <div class="card card-article h-100 border-0 text-center">
                  <img class="card-img-top" src="/assets/article-3.jpg" alt="Card image cap">
                  <div class="card-body px-0">
                    <h3 class="card-title card-article-title text-uppercase">Title</h5>
                    <p class="card-text card-article-description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-article py-2">Go somewhere</a>
                  </div>
                </div>
              </div>
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