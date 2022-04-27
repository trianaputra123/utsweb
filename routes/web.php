<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfosewaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\RekapsewaController;
use App\Models\KelompokTani;
use App\Http\Controllers\PanenController;
use App\Http\Controllers\PetaniController;
use App\Models\Petani;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/Infosewa', [InfosewaController::class, 'index'])->name('Infosewa');
Route::get('/Infosewa/detail/{id_Infosewa}', [InfosewaController::class, 'detail']);
Route::get('/Infosewa/add', [InfosewaController::class, 'add']);
Route::post('/Infosewa/insert', [InfosewaController::class, 'insert']);
Route::get('/Infosewa/edit/{id_Infosewa}', [InfosewaController::class, 'edit']);
Route::post('/Infosewa/update/{id_Infosewa}', [InfosewaController::class, 'update']);
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');
Route::get('/siswa/detail/{id_siswa}', [SiswaController::class, 'detail']);
Route::get('/siswa/add', [SiswaController::class, 'add']);
Route::post('/siswa/insert', [SiswaController::class, 'insert']);
Route::get('/Rekapsewa', [RekapsewaController::class, 'index'])->name('Rekapsewa');;
Route::get('/rekap_absensi/detail/{id_siswa}', [Rekap_absensiController::class, 'detail']);
Route::get('/rekap_absensi/add', [Rekap_absensiController::class, 'add']);
Route::post('/rekap_absensi/insert', [Rekap_absensiController::class, 'insert']);
Route::get('/rekap_absensi/edit/{id_rekap_absensi}', [Rekap_absensiController::class, 'edit']);
Route::post('/rekap_absensi/update/{id_rekap_absensi}', [Rekap_absensiController::class, 'update']);
Route::get('/siswa/edit/{id_siswa}', [SiswaController::class, 'edit']);
Route::post('/siswa/update/{id_siswa}', [SiswaController::class, 'update']);



Route::get('/Infosewa/delete/{id_Infosewa}', [InfosewaController::class, 'delete']);
Route::get('/siswa/delete/{id_siswa}', [SiswaController::class, 'delete']);
Route::get('/rekap_absensi/delete/{id_rekap_absensi}', [Rekap_absensiController::class, 'delete']);
Auth::routes();
Route::get('/addpanen',[PanenController::class, 'create']);
Route::post('/addpanen/store',[PanenController::class, 'store']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/panen',PanenController::class);
Route::get('/addPanen', [Panencontroller::class, 'create']);
Route::get('/petani', [PetaniController::class, 'index']);
Route::get('/addPetani', [Petanicontroller::class, 'create']);


