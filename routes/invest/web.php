<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Frontend\Investor\HomeController;
use App\Http\Controllers\Frontend\Investor\AqarInvstController;
use App\Http\Controllers\Frontend\Investor\CarInvstController;



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
    Route::prefix('invst')->name('invst.')->middleware(['auth'])->group(function () {
        Route::get('countrycities/{id}', 'App\Http\Controllers\Frontend\Investor\HomeController@countrycities')->name('countrycities');
        Route::get('cityareas/{id}', 'App\Http\Controllers\Frontend\Investor\HomeController@cityareas')->name('cityareas');
        Route::get('SubCategories/{id}', 'App\Http\Controllers\Frontend\Investor\HomeController@SubCategories')->name('SubCategories');
        Route::get('home', 'App\Http\Controllers\Frontend\Investor\HomeController@index')->name('home'); 
        Route::get('logout', 'App\Http\Controllers\Frontend\Investor\HomeController@logout')->name('logout');
        Route::resource('aqars', AqarInvstController::class);
        Route::get('countrycities/{id}', 'App\Http\Controllers\Frontend\Investor\HomeController@countrycities')->name('countrycities');
        Route::resource('cars', CarInvstController::class);
        Route::get('detailaqar/{id}', 'App\Http\Controllers\Frontend\Investor\AqarInvstController@detailaqar')->name('detailaqar');
        Route::get('listbookings', 'App\Http\Controllers\Frontend\Investor\AqarInvstController@listbookings')->name('listbookings');
        Route::get('/aqars/getsetting/{id}', 'App\Http\Controllers\Frontend\Investor\AqarInvstController@getsetting');
        Route::get('/aqars/getsetting1/{id}/{id2}', 'App\Http\Controllers\Frontend\Investor\AqarInvstController@getsetting1');
 

    }); //end of invest routes
});






