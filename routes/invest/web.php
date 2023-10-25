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
        Route::get('stop/{aqar_id}', 'App\Http\Controllers\Frontend\Investor\AqarInvstController@stop')->name('stop');
        Route::get('detailaqar/{id}', 'App\Http\Controllers\Frontend\Investor\AqarInvstController@detailaqar')->name('detailaqar'); 
        Route::get('/aqars/getsetting/{id}', 'App\Http\Controllers\Frontend\Investor\AqarInvstController@getsetting');
        Route::get('/aqars/getsetting1/{id}/{id2}', 'App\Http\Controllers\Frontend\Investor\AqarInvstController@getsetting1');
        Route::get('listbookings/{type}' , 'App\Http\Controllers\Frontend\Investor\AqarInvstBookingController@listbookings')->name('listbookings');
        Route::get('accept/{book_id}', 'App\Http\Controllers\Frontend\Investor\AqarInvstBookingController@accept')->name('accept');
        Route::get('reject/{book_id}', 'App\Http\Controllers\Frontend\Investor\AqarInvstBookingController@reject')->name('reject');
        Route::get('attend/{book_id}', 'App\Http\Controllers\Frontend\Investor\AqarInvstBookingController@attend')->name('attend');
        Route::get('notattend/{book_id}', 'App\Http\Controllers\Frontend\Investor\AqarInvstBookingController@notattend')->name('notattend');
        Route::get('bookingDetails/{book_id}', 'App\Http\Controllers\Frontend\Investor\AqarInvstBookingController@bookingDetails')->name('bookingDetails');
        Route::resource('cars', CarInvstController::class);
        Route::get('stopcar/{car_id}', 'App\Http\Controllers\Frontend\Investor\AqarInvstController@stop')->name('stopcar');
        Route::get('detailcar/{id}', 'App\Http\Controllers\Frontend\Investor\CarInvstController@detailcar')->name('detailcar'); 
        Route::get('listbookingscar/{type}' , 'App\Http\Controllers\Frontend\Investor\CarInvstBookingController@listbookings')->name('listbookingscar');
        Route::get('acceptcar/{book_id}', 'App\Http\Controllers\Frontend\Investor\CarInvstBookingController@accept')->name('acceptcar');
        Route::get('rejectcar/{book_id}', 'App\Http\Controllers\Frontend\Investor\CarInvstBookingController@reject')->name('rejectcar');
        Route::get('attendcar/{book_id}', 'App\Http\Controllers\Frontend\Investor\CarInvstBookingController@attend')->name('attendcar');
        Route::get('notattendcar/{book_id}', 'App\Http\Controllers\Frontend\Investor\CarInvstBookingController@notattend')->name('notattendcar');
        Route::get('bookingCarDetails/{book_id}', 'App\Http\Controllers\Frontend\Investor\CarInvstBookingController@bookingDetails')->name('bookingCarDetails');
       
 

    }); //end of invest routes
});






