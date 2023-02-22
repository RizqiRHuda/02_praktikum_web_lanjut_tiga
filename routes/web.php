<?php

use App\Http\Controllers\ContactController;
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
    return "Welcome!";
});

// Praktikum 3 no 2

Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', function () {
        return "Selamat Datang di Marbel Edu Games";
    });
    Route::get('/marbel-and-friends-kids-games', function () {
        return "Selamat Datang di Marbel and Friends Edu Games";
    });
    Route::get('/riri-story-books', function () {
        return "Selamat Datang di Riri Books";
    });

    Route::get('/kolak-kids-songs', function () {
        return "Selamat Datang di Kolak Kids Songs";
    });
});

// Praktikum 3 no 3
Route::get('/news/{program?}', function ($program = null) {
    return 'Menampilkan Daftar Program Berita Tentang ' . $program;
});

// Praktikum 3 no 4
Route::prefix('program')->group(function () {
    Route::get('/karir', function () {
        return "Program Karir";
    });
    Route::get('/magang', function () {
        return "Program Magang";
    });
    Route::get('/kunjungan-industri', function () {
        return "Program Kunjungan Industri";
    });
});

// Praktikum 3 no 5
Route::get('/aboutUs', function(){
    echo "Berada di Halaman About Us";
});

// Praktikum 3 no 6
Route::resource('contact', ContactController::class)->only(['show']);