<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MeetController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\UserController;

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
// user action
Route::put('admin/{id}/update-status', [UserController::class, 'updateStatus'])->name('updateStatus');
Route::post('admin/post-activity', [ProcessController::class, 'postActivity'])->name('postActivity');
Route::post('admin/follow-up', [ProcessController::class, 'processFollowUp'])->name('processFollowUp');

// user detail
Route::get('admin/leads/{id}', [UserController::class, 'userDetail'])->name('userDetail');
Route::get('admin/contacts/{id}', [UserController::class, 'userDetail'])->name('userContactDetail');
Route::get('admin/potentials/{id}', [UserController::class, 'userDetail'])->name('userPotentialDetail');
Route::get('admin/wins/{id}', [UserController::class, 'userDetail'])->name('userWinDetail');
Route::get('admin/loses/{id}', [UserController::class, 'userDetail'])->name('userLoseDetail');

// form Request
Route::post('meet/create', [MeetController::class, 'create'])->name('meet-create');



Route::get('/previous-version', [LandingController::class, 'homepage'])->name('homepage');
Route::get('/', [LandingController::class, 'homepage2'])->name('homepage2');
Route::get('/about-us', [LandingController::class, 'aboutPage'])->name('aboutPage');
Route::get('/pricing', [LandingController::class, 'pricingPage'])->name('pricingPage');
Route::get('/services', [LandingController::class, 'servicePage'])->name('servicePage');
Route::get('/contact-us', [LandingController::class, 'contactPage'])->name('contactPage');

Route::get('/digital-marketing', [LandingController::class, 'landing'])->name('landing');
