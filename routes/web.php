<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaController; // inisialisasi class Controller

use App\Http\Controllers\MatakuliahController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!'; //ini adalah besic Route
});

Route::get('/mahasiswa', function () {  //ini adalah besic Route dengan nama route berbeda
    return 'Halo Mahasiswa';
});

Route::get('/nama/{nama_saya}', function ($nama_saya) {   //code route parameter menamplkan nama saya
    return 'Nama saya: '.$nama_saya;
});

//parameter bersifat opsional dan jika parameter tidak ada tidak not foud
Route::get('/nim/{nim_saya?}', function ($nim_saya = '') {
    return 'NIM saya: '.$nim_saya;
});

//named Route dengan membuat link di view
Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

//route yang mengarahkan ke MahasiswaController dan function show()
Route ::get('/mahasiswa/{paraml}', [MahasiswaController::class, 'show']);

Route::get('/about', function () {
    return view('halaman-about'); //ini route halaman about
});

//Latihan
//ini adalah controler mata kuliah
Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::get('/matakuliah/show/{kode?}', [MatakuliahController::class, 'show']);

/////
