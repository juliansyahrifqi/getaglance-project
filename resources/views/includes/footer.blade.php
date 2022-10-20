<footer>
    <div class="container">
        <div class="row py-5">
            <div class="col-md-6 col-lg-4 mt-3">
            <h4 class="footer-title">Tentang Kami</h4>
            <p class="footer-about-us mt-4">
                {{ $information->description }}
            </p>
            </div>

            <div class="col-md-6 col-lg-2 mt-3">
            <h5 class="footer-title">Informasi</h5>
            <a href="/about" class="text-white mt-4">
                <p class="footer-link mt-4">/about</p>
            </a>

            <a href="/produk" class="text-white mt-4">
                <p class="footer-link mt-4">/produk</p>
            </a>

            <a href="/talent" class="text-white mt-4">
                <p class="footer-link mt-4">/talent</p>
            </a>

            <a href="/kontak" class="text-white mt-4">
                <p class="footer-link mt-4">/kontak</p>
            </a>

            <a href="/afiliasi" class="text-white mt-4">
                <p class="footer-link mt-4">/afiliasi</p>
            </a>
            </div>

            <div class="col-md-6 col-lg-3 mt-3">
                <h4 class="footer-title">Hubungi Kami</h4>
                <a href="https://wa.me/6282127788165?text=Halo" target="_blank" rel="noreferrer" class="text-white">

                    <div class="d-flex align-items-center mt-4">
                        <div class="square">
                            <img class="whatsapp-icon" src="./assets/icon/whatsapp.svg" alt="">
                        </div>
                        <p class="mb-0 ml-2 text-footer">(+62) 8123456789</p>
                    </div>
                </a>

                <div class="d-flex align-items-center mt-2">
                    <div class="square">
                        <img class="email-icon" src="./assets/icon/email.svg" alt="Email Icon">
                    </div>
                    <p class="mb-0 ml-2 text-footer">{{ $information->email }}</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mt-3">
                <h4 class="footer-title">Sosial Media</h4>

                <div class="social-media mt-4">
                    @if(!$socials->isEmpty())
 
                        @foreach($socials as $social)
                            @if(str_contains($social->link, 'https://'))
                                @php $link = $social->link; @endphp
                            @else 
                                @php $link = 'https://' . $social->link; @endphp
                            @endif
                            <a href="{{ $link }}" target="_blank" rel="noreferrer" class="text-white">
                                <div class="d-flex align-items-center mt-3">
                                    <div class="square">
                                    <img class="social-icon" src="{{ Storage::url($social->icon) }}" alt="{{ $social->name}}-icon">
                                    </div>
                                    <p class="mb-0 ml-2 text-footer">{{ $social->account_name }}</p>
                                </div>  
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="footer-copyright">
        <p class="mb-0 p-2 text-center">Copyright &copy; 2022 Project. All Rights Reserved. </p>
    </div>
</footer>