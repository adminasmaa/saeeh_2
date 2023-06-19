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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::prefix(LaravelLocalization::setLocale())->middleware('localeSessionRedirect', 'localizationRedirect', 'localeViewPath')->group(function () {

Route::get('/', 'App\Http\Controllers\Frontend\HomeController@index')->name('Home');
Route::get('countrycities/{id}', 'App\Http\Controllers\Frontend\HomeController@countrycities')->name('countrycities');
Route::get('categorycities/{id}', 'App\Http\Controllers\Frontend\HomeController@categorycities')->name('categorycities');
Route::get('carcategory/{id}', 'App\Http\Controllers\Frontend\HomeController@carcategory')->name('carcategory');
Route::get('roomnumbers/{id}', 'App\Http\Controllers\Frontend\HomeController@roomnumbers')->name('roomnumbers');

});


define('MAINASSETS', URL::asset('assets'));
define('FRONTASSETS', URL::asset('frontend/assets'));
define('MAINUPLOADS', URL::asset('uploads'));
define('MAINDIST', URL::asset('dist/frontend/img'));
define('MAINDASHBOARD', URL::asset('dashboard_files'));




