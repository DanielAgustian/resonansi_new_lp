<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MeetController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\NewLPController;
use App\Http\Controllers\NewHomeController;
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
// Dashboard admin
Route::get('admin', [UserController::class, 'adminDashboard'])->name('adminDashboard');

// user detail
Route::get('admin/leads/{id}', [UserController::class, 'userDetail'])->name('userDetail');
Route::get('admin/contacts/{id}', [UserController::class, 'userDetail'])->name('userContactDetail');
Route::get('admin/potentials/{id}', [UserController::class, 'userDetail'])->name('userPotentialDetail');
Route::get('admin/wins/{id}', [UserController::class, 'userDetail'])->name('userWinDetail');
Route::get('admin/loses/{id}', [UserController::class, 'userDetail'])->name('userLoseDetail');
Route::get('admin/jadwal-meet/detail/{id}', [UserController::class, 'userDetail'])->name('userMeetDetail');

// form Request
Route::post('meet/create', [MeetController::class, 'create'])->name('meet-create');
Route::post('contact/create', [MeetController::class, 'makeContactUs'])->name('makeContactUs');



Route::get('/previous-version', [LandingController::class, 'homepage'])->name('homepage');
Route::get('/v1', [LandingController::class, 'homepage2'])->name('homepage2');
Route::get('/v1/about-us', [LandingController::class, 'aboutPage'])->name('aboutPage');
Route::get('/v1/pricing', [LandingController::class, 'pricingPage'])->name('pricingPage');
Route::get('/v1/services', [LandingController::class, 'servicePage'])->name('servicePage');
Route::get('/v1/contact-us', [LandingController::class, 'contactPage'])->name('contactPage');
Route::get('/v1/blogs', [LandingController::class, 'blogsPage'])->name('blogsPage');
Route::get('/v1/karir', [LandingController::class, 'karirPage'])->name('karirPage');
Route::get('/archive/digital-marketing', [LandingController::class, 'landing'])->name('landing');
// Landing Service
Route::get('/archive/marketplace-optimization', [LandingController::class, 'marketplacePage'])->name('marketplacePage');
Route::get('/archive/social-media-marketing', [LandingController::class, 'socmedPage'])->name('socmedPage');
Route::get('/archive/landing-page', [LandingController::class, 'landingPPage'])->name('landingPPage');
Route::get('/archive/cloud-warehouse-software', [LandingController::class, 'warehousePage'])->name('warehousePage');
Route::get('/archive/conversion-optimization', [LandingController::class, 'conversionPage'])->name('conversionPage');
Route::get('/get-future-event', [MeetController::class, 'getFutureEvent'])->name('getFutureEvent');


// LAB
Route::get('/lab/lab', [LabController::class, 'labPage'])->name('labPage');
Route::post('/lab/meet', [LabController::class, 'create'])->name('postMeet');



// NEW LANDING PAGE
Route::get('/marketplace-optimization', [NewLPController::class, 'marketplacePageV2'])->name('marketplacePageV2');
Route::get('/social-media-marketing', [NewLPController::class, 'socMedPageV2'])->name('socMedPageV2');
Route::get('/landing-page', [NewLPController::class, 'landingPageV2'])->name('landingPageV2');
Route::get('/cloud-warehouse-software', [NewLPController::class, 'warehousePageV2'])->name('warehousePageV2');
Route::get('/conversion-optimization', [NewLPController::class, 'conversionPageV2'])->name('conversionPageV2');

Route::get('/digital-marketing', [NewLPController::class, 'digitalMarketingPageV2'])->name('digitalMarketingPageV2');

// NEW HOME PAGE
Route::get('/', [NewHomeController::class, 'homePageV2'])->name('homePageV2');
Route::get('/pricing', [NewHomeController::class, 'pricingPageV2'])->name('pricingPageV2');
Route::get('/contact-us', [NewHomeController::class, 'contactUsV2'])->name('contactUsV2');