<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Controller
use App\Http\Controllers\Api\ApartmentController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\ViewController;
use App\Http\Controllers\Api\MessageController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::name('api.')->group(function () {

    Route::resource('apartments', ApartmentController::class)->only(['index', 'show']);

});

Route::name('api.')->group(function () {

    Route::resource('services', ServiceController::class)->only(['index']);

});

Route::name('api.')->group(function () {

    Route::resource('views', ViewController::class)->only(['store']);

});

Route::name('api.')->group(function () {

    Route::resource('messages', MessageController::class)->only(['store']);

});
