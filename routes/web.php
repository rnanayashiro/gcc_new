<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    return view('welcome');
});
Route::get('/top', function () {
    return view('top');
})->name('top');

Route::get('/newsForm', function () {
    return view('newsForm');
});

Route::get('/accountingConsulting', function () {
    return view('accountingConsulting');
})->name('accountingConsulting');

Route::get('/taxConsulting', function () {
    return view('taxConsulting');
})->name('taxConsulting');

Route::get('/companyOverview', function () {
    return view('companyOverview');
})->name('companyOverview');

Route::get('/messageFromOurPresident', function () {
    return view('messageFromOurPresident');
})->name('messageFromOurPresident');

Route::get('/member', function () {
    return view('member');
})->name('member');

Route::get('/group', function () {
    return view('group');
})->name('group');

Route::get('/flow', function () {
    return view('flow');
})->name('flow');

Route::get('/bussinessSuccession', function () {
    return view('bussinessSuccession');
})->name('bussinessSuccession');

Route::get('/businessSuccessionServices', function () {
    return view('businessSuccessionServices');
})->name('businessSuccessionServices');

Route::get('/recruit', function () {
    return view('recruit');
})->name('recruit');

Route::get('/systemConsulting', function () {
    return view('systemConsulting');
})->name('systemConsulting');

Route::get('/mergersandAcquisitionsConsulting', function () {
    return view('mergersandAcquisitionsConsulting');
})->name('mergersandAcquisitionsConsulting');

Route::get('/humanResourcesConsulting', function () {
    return view('humanResourcesConsulting');
})->name('humanResourcesConsulting');

Route::get('/initialPublicOfferingConsulting', function () {
    return view('initialPublicOfferingConsulting');
})->name('initialPublicOfferingConsulting');

Route::get('/internationalTaxConsulting', function () {
    return view('internationalTaxConsulting');
})->name('internationalTaxConsulting');

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact');
Route::post('/contact/confirm', [ContactController::class, 'showConfirm'])->name('confirm');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('submit');

Route::get('/Duediligence', function () {
    return view('Duediligence');
})->name('Duediligence');

Route::get('/duediligence', function () {
    return view('duediligence');
})->name('duediligence');

Route::get('/duediligenceService', function () {
    return view('duediligenceService');
})->name('duediligenceService');

Route::get('/duediligenceFaq', function () {
    return view('duediligenceFaq');
})->name('duediligenceFaq');

Route::get('/sitePolicy', function () {
    return view('sitePolicy');
})->name('sitePolicy');

Route::get('/privacyPolicy', function () {
    return view('privacyPolicy');
})->name('privacyPolicy');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/kakunin', function () {
    return view('kakunin');
});