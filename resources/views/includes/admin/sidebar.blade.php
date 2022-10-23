<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard-admin') }}" class="brand-link text-center">
        <span class="brand-text font-weight-light">Get A Glance</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
         <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('dashboard-admin') }}" class="nav-link {{ (request()->is('admin/dashboard*')) ? 'active' : ''}}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Beranda
                        </p>
                    </a>
                </li>

                <li class="nav-header">INFORMASI</li>
                <li class="nav-item">
                    <a href="{{ route('informasi.index') }}" class="nav-link {{ (request()->is('admin/informasi*')) ? 'active' : ''}}">
                        <i class="nav-icon fa fa-info"></i>
                        <p>
                            Informasi Usaha
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('social-media.index') }}" class="nav-link {{ (request()->is('admin/social-media*')) ? 'active' : ''}}">
                        <i class="nav-icon fa fa-hashtag"></i>
                        <p>
                            Sosial Media
                        </p>
                    </a>
                </li>
          
                <li class="nav-header">HALAMAN UTAMA</li>
                <li class="nav-item">
                    <a href="{{ route('slider.index') }}" class="nav-link {{ (request()->is('admin/slider*')) ? 'active' : ''}}">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Slider / Carousel
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('talent-section.index') }}" class="nav-link {{ (request()->is('admin/talent-section*')) ? 'active' : ''}}">
                        <i class="nav-icon fa fa-user"></i>
                        <p>
                            Talent Section
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('quote.index') }}" class="nav-link {{ (request()->is('admin/quote*')) ? 'active' : ''}}">
                        <i class="nav-icon fa fa-quote-left"></i>
                        <p>
                            Quote Section
                        </p>
                    </a>
                </li>

                <li class="nav-header">HALAMAN LAIN</li>
                <li class="nav-item">
                    <a href="{{ route('tentang.index') }}" class="nav-link {{ (request()->is('admin/tentang*')) ? 'active' : ''}}">
                        <i class="nav-icon fa fa-info"></i>
                        <p>
                            Halaman Tentang
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('kontak.index') }}" class="nav-link {{ (request()->is('admin/kontak*')) ? 'active' : ''}}">
                        <i class="nav-icon fa fa-address-card"></i>
                        <p>
                            Halaman Kontak
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('afiliasi.index') }}" class="nav-link {{ (request()->is('admin/afiliasi*')) ? 'active' : ''}}">
                        <i class="nav-icon fa fa-briefcase"></i>
                        <p>
                            Halaman Afiliasi
                        </p>
                    </a>
                </li>

                <li class="nav-header">TALENT</li>
                <li class="nav-item">
                    <a href="{{ route('talent.index') }}" class="nav-link {{ (request()->is('admin/talent*')) ? 'active' : ''}}">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            List Talent
                        </p>
                    </a>
                </li>

                <li class="nav-header">PRODUK</li>
                <li class="nav-item">
                    <a href="{{ route('kategori.index') }}" class="nav-link {{ (request()->is('admin/kategori*')) ? 'active' : ''}}">
                        <i class="nav-icon fa fa-divide"></i>
                        <p>
                            Kategori
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('produk.index') }}" class="nav-link {{ (request()->is('admin/produk*')) ? 'active' : ''}}">
                        <i class="nav-icon fa fa-image"></i>
                        <p>
                            List Produk
                        </p>
                    </a>
                </li>

                <li class="nav-header">Pengguna</li>
                <li class="nav-item">
                    <a href="{{ route('pengguna.index') }}" class="nav-link {{ (request()->is('admin/pengguna*')) ? 'active' : ''}}">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            List Admin
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
      <!-- /.sidebar-menu -->
    </div>  
    <!-- /.sidebar -->
</aside>