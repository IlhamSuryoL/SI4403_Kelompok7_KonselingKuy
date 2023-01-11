<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Psikolog;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\LoginController;

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
Route::get('/LoginPsikolog', function () {
    return view('LoginPsikolog');
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
// Route::get('/db', function () {
//     return view('db');
// });
// Route::get('/dataOrder', function () {
//     return view('dataOrder');
// });
Route::get('/jadwalkonselor', function () {
    return view('jadwalkonselor');
});
Route::get('/dataPsikolog', function () {
    return view('dataPsikolog');
});
// Route::get('/dataUser', function () {
//     return view('dataUser');
// });
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
Route::get('/ruanginformasiKonselor', function () {
    return view('ruanginformasiKonselor');
});
Route::get('read_psikolog', [UserController::class, 'read_psikolog']);
Route::get('read_artikel', [ArtikelController::class, 'read_artikel']);
Route::get('read_konsulKonselor', [UserController::class, 'read_konsulKonselor']);
Route::get('read_konsul', [UserController::class, 'read_konsul']);
Route::get('db', [UserController::class, 'read_all']);
Route::get('dataOrder', [UserController::class, 'read_konsulAdmin']);
Route::get('dataUser', [UserController::class, 'read_userbyAdmin']);
Route::get('dataPsikolog', [UserController::class, 'read_psikologbyAdmin']);
Route::resource('bookingkonsul', UserController::class);
Route::resource('add_artikel', ArtikelController::class);
Route::post('/editriwayatkonseling', [UserController::class, 'update']);
Route::post('/editriwayatkonselingAdmin', [UserController::class, 'update2']);
Route::post('delete', [UserController::class, 'destroy']);
Route::post('/deleteriwayatkonselingAdmin', [UserController::class, 'destroy2']);
Route::post('/deleteuserbyAdmin', [UserController::class, 'destroyuser']);
Route::post('/deletepsikologbyAdmin', [UserController::class, 'destroypsikolog']);
Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');

Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');

Route::get('logout', [UserController::class, 'logout'])->name('logout');