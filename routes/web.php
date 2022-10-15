<?php

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
    return view('pages.home');
});
Route::get('/produk', function () {
    return view('pages.produk');
});
Route::get('/artikel', function () {
    return view('pages.artikel');
});
Route::get('/talent', function () {
    return view('pages.talent');
});
Route::get('/tentang', function () {
    return view('pages.tentang');
});
Route::get('/kontak', function () {
    return view('pages.kontak');
});
Route::get('/afiliasi', function () {
    return view('pages.afiliasi');
});

Route::get('/admin', function () {
    return view('pages.admin.dashboard');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
