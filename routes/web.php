<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Models\Afiliasi;
use App\Models\Information;
use App\Models\Kategori;
use App\Models\Kontak;
use App\Models\Produk;
use App\Models\Quote;
use App\Models\Slider;
use App\Models\SocialMedia;
use App\Models\Talent;
use App\Models\TalentSection;
use App\Models\Tentang;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home', [
        'sliders' => Slider::all(),
        'categories' => Kategori::all(),
        'quote' => Quote::find(1),
        'talentSection' => TalentSection::find(1),
        'products' => Produk::limit(3)->get(),
    ]);
});
Route::get('/produk', function () {
    return view('pages.produk', [
        'categories' => Kategori::all(),
        'products' => Produk::with('kategori')->simplePaginate(12)
    ]);
});

Route::get('/produk/{id}', function($slug) {
    $category = Kategori::where('slug', $slug)->firstOrFail();
    $products = Produk::with('kategori')->where('kategori_id', $category->id)->simplePaginate(12);

    return view('pages.produk', [
        'categories' => Kategori::all(),
        'products' => $products,
    ]);
})->name('produk-kategori');

// Route::get('/artikel', function () {
//     return view('pages.artikel');
// });

Route::get('/talent', function () {
    return view('pages.talent', [
        'talents' => Talent::all(),
        'whatsapp' => Information::first()->whatsapp,
    ]);
});

Route::get('/tentang', function () {
    return view('pages.tentang', [
        'tentang' => Tentang::findOrFail(1),
    ]);
});

Route::get('/kontak', function () {
    return view('pages.kontak', [
        'kontak' => Kontak::findOrFail(1),
        'socials' => SocialMedia::all(),
        'informasi' => Information::first()
    ]);
});

Route::get('/afiliasi', function () {
    return view('pages.afiliasi', [
        'afiliasi' => Afiliasi::findOrFail(1)
    ]);
});

// Route::get('/admin', function () {
//     return view('pages.admin.dashboard');
// });


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('admin')->middleware(['auth'])->group(function() {
    Route::get('dashboard', function() {
        return view('pages.admin.dashboard');
    })->name('dashboard-admin');
    Route::resource('slider', 'App\Http\Controllers\Admin\SliderController');
    Route::resource('kategori', 'App\Http\Controllers\Admin\KategoriController');
    Route::resource('quote', 'App\Http\Controllers\Admin\QuoteController')->except(['create', 'store', 'show', 'edit', 'destroy']);
    Route::resource('talent-section', 'App\Http\Controllers\Admin\TalentSectionController')->except(['create', 'store', 'show', 'edit', 'destroy']);
    Route::resource('tentang', 'App\Http\Controllers\Admin\TentangController')->except(['create', 'store', 'show', 'edit', 'destroy']);
    Route::resource('kontak', 'App\Http\Controllers\Admin\KontakController');
    Route::resource('talent', 'App\Http\Controllers\Admin\TalentController');
    Route::resource('afiliasi', 'App\Http\Controllers\Admin\AfiliasiController')->except(['create', 'store', 'show', 'edit', 'destroy']);
    Route::resource('informasi', 'App\Http\Controllers\Admin\InformationController');
    Route::resource('social-media', 'App\Http\Controllers\Admin\SocialMediaController');
    Route::resource('produk', 'App\Http\Controllers\Admin\ProdukController');
    Route::resource('pengguna', 'App\Http\Controllers\Admin\PenggunaController')->except(['edit', 'update', 'show', 'destroy']);
});

require __DIR__.'/auth.php';
