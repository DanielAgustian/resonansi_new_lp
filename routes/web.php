<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

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


//Route::get('/induk-produk', [ProductController::class, 'indukProduk'])->name('indukProduk');

Route::get('/previous-version', [LandingController::class, 'homepage'])->name('homepage');
Route::get('/', [LandingController::class, 'homepage2'])->name('homepage2');
Route::get('/about-us', [LandingController::class, 'aboutPage'])->name('aboutPage');
Route::get('/pricing', [LandingController::class, 'pricingPage'])->name('pricingPage');
Route::get('/services', [LandingController::class, 'servicePage'])->name('servicePage');
Route::get('/contact-us', [LandingController::class, 'contactPage'])->name('contactPage');

Route::get('/digital-marketing', [LandingController::class, 'landing'])->name('landing');