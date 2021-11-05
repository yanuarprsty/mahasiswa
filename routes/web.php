<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\halaman2Controller;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});


Route::get('/halaman2', [Halaman2Controller::class,'index']);

Route::get('/mahasiswa', '\App\Http\Controllers\MahasiswaController@index');

Route::get('/utsmhs', '\App\Http\Controllers\MahasiswaController@index');

Route::get('/tambah',function () {return view('tambah_mahasiswa');});
Route::post('/proses_tambah','\App\Http\Controllers\MahasiswaController@proses_tambah');

Route::get('/ubah/{nim}','\App\Http\Controllers\MahasiswaController@ubah');
Route::post('/proses_ubah','\App\Http\Controllers\MahasiswaController@proses_ubah');

Route::get('/hapus/{nim}','\App\Http\Controllers\MahasiswaController@hapus');

Route::get('/cetakword','\App\Http\Controllers\MahasiswaController@cetakword');
Route::get('/cetakexcel','\App\Http\Controllers\MahasiswaController@cetakexcel');
Route::get('/grafik','\App\Http\Controllers\MahasiswaController@grafik');
Route::get('/cetakpdf','\App\Http\Controllers\MahasiswaController@cetakpdf');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
