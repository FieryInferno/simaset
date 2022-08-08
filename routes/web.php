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
})->name('login');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'auth']);

Route::middleware('auth')->group(function () {
  Route::get('/beranda', [App\Http\Controllers\BerandaController::class, 'index']);
  Route::resource('aset', App\Http\Controllers\AsetController::class);
  Route::get('identifikasi_aset', [App\Http\Controllers\AsetController::class, 'identifikasiAset']);
  Route::post('identifikasi_aset', [App\Http\Controllers\AsetController::class, 'getIdentifikasiAset']);
  Route::get('status_aset', [App\Http\Controllers\AsetController::class, 'statusAset']);
  Route::get('status_aset/{aset}', [App\Http\Controllers\AsetController::class, 'showStatusAset']);
});
