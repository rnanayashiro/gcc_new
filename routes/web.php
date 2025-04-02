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

//TOP
Route::get('/top', function () {
    return view('top');
})->name('top');

//会計コンサルティング
Route::get('/accountingConsulting', function () {
    return view('accountingConsulting');
})->name('accountingConsulting');

//システムコンサルティング
Route::get('/systemConsulting', function () {
    return view('systemConsulting');
})->name('systemConsulting');

//Ｍ＆Ａコンサルティング
Route::get('/mergersandAcquisitionsConsulting', function () {
    return view('mergersandAcquisitionsConsulting');
})->name('mergersandAcquisitionsConsulting');

//人事コンサルティング
Route::get('/humanResourcesConsulting', function () {
    return view('humanResourcesConsulting');
})->name('humanResourcesConsulting');

//株式公開コンサルティング
Route::get('/initialPublicOfferingConsulting', function () {
    return view('initialPublicOfferingConsulting');
})->name('initialPublicOfferingConsulting');

//税務コンサルティング
Route::get('/taxConsulting', function () {
    return view('taxConsulting');
})->name('taxConsulting');

//国際税務コンサルティング
Route::get('/internationalTaxConsulting', function () {
    return view('internationalTaxConsulting');
})->name('internationalTaxConsulting');

//会社概要
Route::get('/companyOverview', function () {
    return view('companyOverview');
})->name('companyOverview');

//社長挨拶
Route::get('/messageFromOurPresident', function () {
    return view('messageFromOurPresident');
})->name('messageFromOurPresident');

//メンバー
Route::get('/member', function () {
    return view('member');
})->name('member');

//グループ紹介
Route::get('/group', function () {
    return view('group');
})->name('group');

//サービスコンセプト
Route::get('/flow', function () {
    return view('flow');
})->name('flow');

//お問い合わせ
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact');
Route::post('/contact/confirm', [ContactController::class, 'showConfirm'])->name('confirm');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('submit');

//事業承継とは
Route::get('/bussinessSuccession', function () {
    return view('bussinessSuccession');
})->name('bussinessSuccession');

//事業承継サービス内容
Route::get('/businessSuccessionServices', function () {
    return view('businessSuccessionServices');
})->name('businessSuccessionServices');

//採用情報
Route::get('/recruit', function () {
    return view('recruit');
})->name('recruit');

//デューデリジェンスとは
Route::get('/duediligence', function () {
    return view('duediligence');
})->name('duediligence');

//デューデリジェンスサービス内容
Route::get('/duediligenceService', function () {
    return view('duediligenceService');
})->name('duediligenceService');

//デューデリジェンスサービスFAQ
Route::get('/duediligenceFaq', function () {
    return view('duediligenceFaq');
})->name('duediligenceFaq');

//サイトポリシー
Route::get('/sitePolicy', function () {
    return view('sitePolicy');
})->name('sitePolicy');

//プライバシーポリシー
Route::get('/privacyPolicy', function () {
    return view('privacyPolicy');
})->name('privacyPolicy');

//NEWS投稿
Route::get('/newsForm', function () {
    return view('newsForm');
});

//サービス一覧
Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/kakunin', function () {
    return view('kakunin');
});
