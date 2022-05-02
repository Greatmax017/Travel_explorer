<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/about', function () {
    return view('about');
});
// Route::get('/flights', function () {
//     return view('flights');
// });
Route::post('/hotels', [App\Http\Controllers\Controller::class, 'fetch_hotels'])->name('fetch_hotels');
Route::post('/flights', [App\Http\Controllers\Controller::class, 'fetch_air'])->name('fetch_air');
Route::get('/hotel_details', [App\Http\Controllers\Controller::class, 'hotel_details'])->name('hotel_details');
