<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard-admin') }}" class="brand-link">
        <img src="/vendor/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
                    <a href="{{ route('kategori.index') }}" class="nav-link {{ (request()->is('admin/kategori*')) ? 'active' : ''}}">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Kategori
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('quote.index') }}" class="nav-link {{ (request()->is('admin/quote*')) ? 'active' : ''}}">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Quote
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
      <!-- /.sidebar-menu -->
    </div>  
    <!-- /.sidebar -->
</aside>