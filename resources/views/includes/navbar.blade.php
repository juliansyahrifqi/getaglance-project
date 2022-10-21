<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        @if($information->image) 
            <img src="{{ Storage::url($information->image) }}" alt="{{ $information->name }}" class="navbar-brand navbar-brand-logo nav-link-logo nav-link-logo-image m-0 text-center" style="width: 25%;">
        @else 
            <a href="/" class="navbar-brand nav-link-logo m-0">{{ $information->name }}</a>
        @endif
        
        <div class="collapse navbar-collapse" id="navbarDropdown">
            <ul class="navbar-nav mr-auto py-3 px-3 d-flex align-items-center justify-content-between w-100
        ">
                <li class="nav-item {{ request()->is('produk') ? 'active' : '' }}">
                    <a class="nav-link" href="/produk">Produk</a>
                </li>
                <li class="nav-item {{ request()->is('talent') ? 'active' : '' }}">
                    <a class="nav-link" href="/talent">Talent</a>
                </li>
                <li class="nav-item {{ request()->is('/') ? 'active' : '' }} text-center" >
                    @if($information->image) 
                        <a href="/">
                            <img src="{{ Storage::url($information->image) }}" alt="{{ $information->name }}" class="navbar-brand nav-link-logo nav-link-logo-image m-0 text-center" style="width: 50%;">
                        </a>
                    @else 
                        <a href="/" class="navbar-brand nav-link-logo m-0">{{ $information->name }}</a>
                    @endif
                </li>
                <li class="nav-item {{ request()->is('tentang') ? 'active' : '' }}">
                    <a class="nav-link" href="/tentang">Tentang</a>
                </li>
                <li class="nav-item {{ request()->is('kontak') ? 'active' : '' }}">
                    <a class="nav-link" href="/kontak">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>