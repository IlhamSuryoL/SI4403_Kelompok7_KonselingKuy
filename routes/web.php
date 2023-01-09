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
    return view('Registrasi');
});

Route::get('/login', function () {
    return view('Login');
});

Route::get('/artikel', function () {
    return view('artikel');
});
Route::get('/newArtik', function () {
    return view('newArtik');
});

Route::get('/homepage', function () {
    return view('homepage');
});
Route::get('/payment', function () {
    return view('payment');
});
Route::get('/ruanginformasi', function () {
    return view('ruanginformasi');
});
Route::get('/ruangkonseling', function () {
    return view('ruangkonseling');
});
Route::get('/db', function () {
    return view('db');
});
Route::get('/dataOrder', function () {
    return view('dataOrder');
});
Route::get('/jadwalkonselor', function () {
    return view('jadwalkonselor');
});
Route::get('/dataPsikolog', function () {
    return view('dataPsikolog');
});
Route::get('/dataUser', function () {
    return view('dataUser');
});
Route::get('/addartikel', function () {
    return view('addartikel');
});
Route::get('/homepagekonselor', function () {
    return view('homepagekonselor');
});
Route::get('/profileuserKonselor', function () {
    return view('profileuserKonselor');
});
Route::get('/profileuser', function () {
    return view('profileuser');
});
Route::get('/riwayatkonseling', function () {
    return view('riwayatkonseling');
});
Route::get('/ruanginformasiKonselor', function () {
    return view('ruanginformasiKonselor');
});
