<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

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
Route::prefix(LaravelLocalization::setLocale())->middleware('localeSessionRedirect', 'localizationRedirect', 'localeViewPath')->group(function () {
Auth::routes();
});

Route::get('/', function () {
    return view('welcome');
});

//

define('MAINASSETS', URL::asset('public/assets'));
define('MAINUPLOADS', URL::asset('uploads'));
define('MAINDIST', URL::asset('dist/frontend/img'));
define('MAINDASHBOARD', URL::asset('public/dashboard_files'));




