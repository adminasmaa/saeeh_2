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
    Route::get('subcategories/{id}/{city_id}', 'App\Http\Controllers\Frontend\CategoryController@subcategories')->name('subcategories');
    Route::get('detailplace/{id}', 'App\Http\Controllers\Frontend\CategoryController@detailplace')->name('detailplace');

    Route::get('sitelogin', 'App\Http\Controllers\Frontend\AuthController@login')->name('sitelogin');
    Route::post('logins', 'App\Http\Controllers\Frontend\AuthController@checklogin')->name('logins');
    Route::get('registers', 'App\Http\Controllers\Frontend\AuthController@register')->name('registers');
    Route::post('createaccount', 'App\Http\Controllers\Frontend\AuthController@createaccount')->name('createaccount');

//cars start
    Route::get('subcategorycars/{id}', 'App\Http\Controllers\Frontend\CarController@allcars')->name('subcategorycars');
    Route::get('cars', 'App\Http\Controllers\Frontend\CarController@allcars')->name('cars');
    Route::get('allcarsFillter', 'App\Http\Controllers\Frontend\CarController@allcarsFillter')->name('allcarsFillter');
    Route::get('carscategories/{id}', 'App\Http\Controllers\Frontend\CarController@allcarscategories')->name('carscategories');
    Route::get('detailcar/{id}', 'App\Http\Controllers\Frontend\CarController@detailcar')->name('detailcar');
    Route::get('checkallcar', 'App\Http\Controllers\Frontend\CarController@CheckCar')->name('checkallcar');
    Route::get('bookingcar/{id}', 'App\Http\Controllers\Frontend\CarController@bookingcar')->name('bookingcar')->middleware('web');
    Route::get('detailbooking/{id}', 'App\Http\Controllers\Frontend\CarController@detailbooking')->name('detailbooking')->middleware('web');
    Route::get('addbookingcar', 'App\Http\Controllers\Frontend\CarController@Addbookingcar')->name('addbookingcar');
//cars end

//aquar start
    Route::get('aquars/{id}', 'App\Http\Controllers\Frontend\AquarController@allaquars')->name('aquars');
    Route::post('filteraquars', 'App\Http\Controllers\Frontend\AquarController@filteraquars')->name('filteraquars');
    Route::get('detailaquar/{id}', 'App\Http\Controllers\Frontend\AquarController@detailaquar')->name('detailaquar');
    //list of add favourite
    Route::get('aquars/favouritAqar/{id}', 'App\Http\Controllers\Frontend\AquarController@favouritAqar')->name('aquars.favouritAqar')->middleware('web');
    Route::get('subcategorycars/favouritCar/{id}', 'App\Http\Controllers\Frontend\CarController@favouritCar')->name('subcategorycars.favouritCar')->middleware('web');
    Route::get('/favouritPlace/{id}', 'App\Http\Controllers\Frontend\CarController@favouritPlace')->name('favouritPlace')->middleware('web');

    //ratings

    Route::post('/addRate', 'App\Http\Controllers\Frontend\CarController@addRate')->name('addRate');
    Route::post('/addRateCar', 'App\Http\Controllers\Frontend\CarController@addRateCar')->name('addRateCar');
    Route::post('/addRateAqar', 'App\Http\Controllers\Frontend\AquarController@addRateAqar')->name('addRateAqar');



    Route::get('checkallaquar', 'App\Http\Controllers\Frontend\AquarController@checkallaquar')->name('checkallaquar');

//booking
    Route::get('bookingaquars/{id}', 'App\Http\Controllers\Frontend\AquarController@bookingaquars')->name('bookingaquars')->middleware('web');
    Route::get('detailbookingaquars/{id}', 'App\Http\Controllers\Frontend\AquarController@detailbookingaquars')->name('detailbookingaquars')->middleware('web');
    Route::get('addbookingaquars', 'App\Http\Controllers\Frontend\AquarController@addbookingaquars')->name('addbookingaquars');

    //my booking all car&&aquars

    Route::get('mybookingAll', 'App\Http\Controllers\Frontend\AquarController@mybookingAll')->name('mybookingAll');

//aquar end


Route::get('amira1', 'App\Http\Controllers\Frontend\HomeController@amira1')->name('amira1');


});


Route::post('addContacts', 'App\Http\Controllers\Frontend\ContactController@addContacts')->name('addContacts');
define('MAINASSETS', URL::asset('public/assets'));
define('FRONTASSETS', URL::asset('public/frontend/assets'));
define('MAINUPLOADS', URL::asset('public/uploads'));
define('MAINDIST', URL::asset('public/dist/frontend/img'));
define('MAINDASHBOARD', URL::asset('public/dashboard_files'));

if (!defined('constant')) define('constant', 'value');



