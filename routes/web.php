<?php

use Illuminate\Support\Facades\Route;


Route::get('/landingpage', function () {
    return view('landingpage');
});

Route::get('/login', function () {
    return view('login');
});



Route::get('/welcome', function () {
    return view('welcome');
});


//tampilan di navbar yaaa
Route::get('/profil', function () {
    return view('profil');
});

Route::get('/profil_sejarah', function () {
    return view('profil_sejarah');
});

Route::get('/profil_struktur_organisasi', function () {
    return view('profil_struktur_organisasi');
});

Route::get('/profil_visi&misi', function () {
    return view('profil_visi&misi');
});

// Route::get('/bidang', function () {
//     return view('bidang');
// });

Route::get('/sekretariat', function () {
    return view('sekretariat');
});

Route::get('/perumahan', function () {
    return view('perumahan');
});

Route::get('/ptd', function () {
    return view('ptd');
});

Route::get('/kelompokjabatan', function () {
    return view('kelompokjabatan');
});

Route::get('/kawasanpemukiman', function () {
    return view('kawasanpemukiman');
});

Route::get('/informasi_berita', function () {
    return view('informasi_berita');
});

Route::get('/informasi_potensi_daerah', function () {
    return view('informasi_potensi_daerah');
});


// Route::get('/media', function () {
//     return view('media');
// });

Route::get('/gambar', function () {
    return view('gambar');
});

Route::get('/video', function () {
    return view('video');
});

Route::get('/hubungikami', function () {
    return view('hubungikami');
});