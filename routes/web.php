<?php

use Illuminate\Support\Facades\Route;

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
});
Route::get('/newsForm', function () {
    return view('newsForm');
});
Route::get('/accountingConsulting', function () {
    return view('accountingConsulting');
});
Route::get('/taxConsulting', function () {
    return view('taxConsulting');
});
Route::get('/companyOverview', function () {
    return view('companyOverview');
});
Route::get('/messageFromOurPresident', function () {
    return view('messageFromOurPresident');
});
Route::get('/member', function () {
    return view('member');
});
Route::get('/group', function () {
    return view('group');
});
Route::get('/flow', function () {
    return view('flow');
});
Route::get('/bussinessSuccession', function () {
    return view('bussinessSuccession');
});
Route::get('/businessSuccessionServices', function () {
    return view('businessSuccessionServices');
});
Route::get('/recruit', function () {
    return view('recruit');
});
Route::get('/systemConsulting', function () {
    return view('systemConsulting');
});
Route::get('/mergersandAcquisitionsConsulting', function () {
    return view('mergersandAcquisitionsConsulting');
});
Route::get('/humanResourcesConsulting', function () {
    return view('humanResourcesConsulting');
});
Route::get('/initialPublicOfferingConsulting', function () {
    return view('initialPublicOfferingConsulting');
});
Route::get('/internationalTaxConsulting', function () {
    return view('internationalTaxConsulting');
});
Route::get('/duediligence', function () {
    return view('duediligence');
});
Route::get('/duediligenceService', function () {
    return view('duediligenceService');
});
Route::get('/duediligenceFaq', function () {
    return view('duediligenceFaq');
});
Route::get('/sitePolicy', function () {
    return view('sitePolicy');
});
Route::get('/privacyPolicy', function () {
    return view('privacyPolicy');
});