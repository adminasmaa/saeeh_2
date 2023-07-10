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
| routes ares loaded by the RouteServiceProvider within a group which
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
Route::get('countries', 'App\Http\Controllers\Frontend\CountryController@index')->name('countries');
Route::get('cities/{id}', 'App\Http\Controllers\Frontend\CityController@index')->name('cities');
Route::get('countrycities/{id}', 'App\Http\Controllers\Frontend\HomeController@countrycities')->name('countrycities');
Route::get('categorycities/{id}', 'App\Http\Controllers\Frontend\HomeController@categorycities')->name('categorycities');
Route::get('carcategory/{id}', 'App\Http\Controllers\Frontend\HomeController@carcategory')->name('carcategory');
Route::get('roomnumbers/{id}', 'App\Http\Controllers\Frontend\HomeController@roomnumbers')->name('roomnumbers');
Route::get('freq_question', 'App\Http\Controllers\Frontend\QuestionController@index')->name('freq_question');
Route::get('contacts', 'App\Http\Controllers\Frontend\ContactController@contacts')->name('contacts');
Route::get('termAndCondition', 'App\Http\Controllers\Frontend\HomeController@termAndCondition')->name('termAndCondition');
Route::get('categories/{id}', 'App\Http\Controllers\Frontend\CategoryController@categories')->name('categories');
Route::get('subcategories/{id}', 'App\Http\Controllers\Frontend\CategoryController@subcategories')->name('subcategories');
Route::get('detailplace/{id}', 'App\Http\Controllers\Frontend\CategoryController@detailplace')->name('detailplace');
Route::get('sitelogin', 'App\Http\Controllers\Frontend\AuthController@login')->name('sitelogin');
Route::post('login', 'App\Http\Controllers\Frontend\AuthController@checklogin')->name('login');
Route::get('registers', 'App\Http\Controllers\Frontend\AuthController@register')->name('registers');
Route::post('createaccount', 'App\Http\Controllers\Frontend\AuthController@createaccount')->name('createaccount');

Route::get('cars', 'App\Http\Controllers\Frontend\CarController@allcars')->name('cars');
Route::get('detailcar/{id}', 'App\Http\Controllers\Frontend\CarController@detailcar')->name('detailcar');

});
Route::post('addContacts', 'App\Http\Controllers\Frontend\ContactController@addContacts')->name('addContacts');
define('MAINASSETS', URL::asset('assets'));
define('FRONTASSETS', URL::asset('frontend/assets'));
define('MAINUPLOADS', URL::asset('uploads'));
define('MAINDIST', URL::asset('dist/frontend/img'));
define('MAINDASHBOARD', URL::asset('dashboard_files'));




