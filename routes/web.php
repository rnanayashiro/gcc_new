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
