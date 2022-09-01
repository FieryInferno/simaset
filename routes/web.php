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
    return view('welcome');
})->name('login')->middleware('guest');;
Route::post('/login', [App\Http\Controllers\LoginController::class, 'auth']);
Route::get('lupa_password', [App\Http\Controllers\LoginController::class, 'lupaPassword']);
Route::post('lupa_password', [App\Http\Controllers\LoginController::class, 'sendEmail']);
Route::get('password_baru', [App\Http\Controllers\LoginController::class, 'passwordBaru']);
Route::post('password_baru', [App\Http\Controllers\LoginController::class, 'changePassword']);

Route::middleware('auth')->group(function () {
  Route::get('/beranda', [App\Http\Controllers\BerandaController::class, 'index']);
  Route::resource('aset', App\Http\Controllers\AsetController::class);
  Route::get('identifikasi_aset', [App\Http\Controllers\AsetController::class, 'identifikasiAset']);
  Route::post('identifikasi_aset', [App\Http\Controllers\AsetController::class, 'getIdentifikasiAset']);
  Route::get('status_aset', [App\Http\Controllers\AsetController::class, 'statusAset']);
  Route::get('status_aset/{aset}', [App\Http\Controllers\AsetController::class, 'showStatusAset']);
  Route::put('status_aset/{aset}/{status}', [App\Http\Controllers\AsetController::class, 'updateStatusAset']);
  Route::get('akun', [App\Http\Controllers\AkunController::class, 'index']);
  Route::post('akun/{user}', [App\Http\Controllers\AkunController::class, 'update']);
  Route::post('logout', [App\Http\Controllers\LoginController::class, 'logout']);
  Route::resource('pengadaan_aset', App\Http\Controllers\PengadaanController::class);
  Route::resource('maintenance_aset', App\Http\Controllers\MaintenanceController::class);
  Route::resource('penghapusan_aset', App\Http\Controllers\PenghapusanController::class);
  Route::resource('peminjaman_aset', App\Http\Controllers\PeminjamanController::class);
  Route::get('berkas', [App\Http\Controllers\BerkasController::class, 'index']);
  Route::get('berkas/download/{berkas}/{bulan}/{tahun}', [App\Http\Controllers\BerkasController::class, 'download']);
  Route::get('detail_lokasi/{aset}', [App\Http\Controllers\AsetController::class, 'detailLokasi']);
});
