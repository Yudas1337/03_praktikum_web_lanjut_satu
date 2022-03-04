<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\WelcomeController;

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [WelcomeController::class, 'index']);
Route::get('home', [HomeController::class, 'index'])->name('home');

Route::prefix('category')->group(function () {
    Route::get('marbel-edu-games', [ProductController::class, 'eduGames']);
    Route::get('marbel-and-friends-kids-games', [ProductController::class, 'kidsGames']);
    Route::get('riri-story-books', [ProductController::class, 'storyBooks']);
    Route::get('kolak-kids-songs', [ProductController::class, 'kidsSongs']);
});

Route::get('news/{slug?}', [NewsController::class, 'show']);

Route::prefix('program')->group(function () {
    Route::get('karir', [ProgramController::class, 'karir']);
    Route::get('magang', [ProgramController::class, 'magang']);
    Route::get('kunjungan-industri', [ProgramController::class, 'kunjungan']);
});

Route::get('about-us', [AboutController::class, 'about']);

Route::resource('contact-us', ContactController::class)->only('index', 'store');
