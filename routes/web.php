<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsumeApiController;

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
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('list',[ConsumeApiController::class,'getDataBooking']);

// Route::get('/list',function () {
//     return view('list');
// });

Route::get('/detail', function () {
    return view('detail');
});
Route::get('/form', function () {
    return view('form');
});
Route::get('/registrasi', function () {
    return view('registrasi');
});
