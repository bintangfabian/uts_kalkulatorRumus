<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KalkulatorController;

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
    return view('menu');
});

Route::get('/tabung', function () {
    return view('tabung');
});

Route::get('/bola', function () {
    return view('bola');
});

Route::get('/kerucut', function () {
    return view('kerucut');
});

Route::post('/voltab', [KalkulatorController::class, 'volumeTabung']);
Route::post('/volbal', [KalkulatorController::class, 'volumeBola']);
Route::post('/volker', [KalkulatorController::class, 'volumeKerucut']);
// Route::post('/kalkulator', 'KalkulatorController@volumeTabung');
// Route::view('/tabung', 'tabung');