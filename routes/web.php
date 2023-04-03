<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\PublishedListingController;
use App\Http\Controllers\FreeBookController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\MessageController;

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

Route::get('/about', function () {return view('about');});
Route::get('/services', function () {return view('services');});
Route::get('/contact', function () {return view('contact');});

Route::get('/free-book', function () {return view('free-book');});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/published-listings', [PublishedListingController::class, 'index'])->name('published-listings.index');
Route::get('/published-listings/{id}', [PublishedListingController::class, 'show'])->name('published-listings.show');

Route::post('/listings/publish', [ListingController::class, 'publish'])->name('listings.publish');
Route::post('/listings/unpublish', [ListingController::class, 'unpublish'])->name('listings.unpublish');
Route::post('/free-book/get', [FreeBookController::class, 'store'])->name('free-book.store');
Route::post('/free-book/download', [FreeBookController::class, 'download'])->name('free-book.download');
Route::post('/subscribe', [SubscriptionController::class, 'store'])->name('subscribe.store');
Route::post('/contact', [MessageController::class, 'store'])->name('contact.store');
Route::resource('listings', ListingController::class);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

});
