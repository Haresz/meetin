<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookingRoomController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('bookingRoom', [bookingRoomController::class, 'index']);
Route::get('bookingRoom/{id}', [bookingRoomController::class, 'show']);
Route::post('bookingRoom', [bookingRoomController::class, 'store']);
Route::put('bookingRoom/{id}', [bookingRoomController::class, 'update']);
Route::delete('bookingRoom/{id}', [bookingRoomController::class, 'destroy']);

Route::resource('bookingRomms', TransaksiController::class)->except(
    ['create', 'edit']
);  