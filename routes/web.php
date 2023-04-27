<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ApartmentController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SponsorshipController;
use App\Http\Controllers\Admin\ViewController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

    Route::resource('apartments', ApartmentController::class);
    Route::resource('messages', MessageController::class);
    Route::resource('services', ServiceController::class);

    Route::get('/apartments/{apartment}/sponsorships', [SponsorshipController::class, 'index'])->name('sponsorships.index');
    Route::get('/apartments/{apartment}/sponsorships/{sponsorship}', [SponsorshipController::class, 'checkout'])->name('sponsorships.checkout');
    Route::post('/apartments/{apartment}/sponsorships/{sponsorship}', [SponsorshipController::class, 'store'])->name('sponsorships.store');
    
    Route::resource('images', ImageController::class);
    Route::resource('views', ViewController::class);

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
