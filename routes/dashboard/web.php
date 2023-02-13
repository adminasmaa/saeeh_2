<?php


use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\CountryController;
use App\Http\Controllers\Dashboard\CityController;
use App\Http\Controllers\Dashboard\CategoryController;

use App\Http\Controllers\Dashboard\UserController;
use Illuminate\Support\Facades\Route;


Route::prefix(LaravelLocalization::setLocale())->middleware('localeSessionRedirect', 'localizationRedirect', 'localeViewPath')->group(function () {
    Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function () {
        //users
        Route::resource('users', UserController::class);
        //roles
        Route::resource('roles', RoleController::class)->except(['show']);

        //countries
        Route::resource('countries', CountryController::class);
        Route::get('addCity', 'App\Http\Controllers\Dashboard\CountryController@AddCity')->name('addCity');
        //cities
        Route::resource('cities', CityController::class);

        //categories
        Route::resource('categories', CategoryController::class);



    }); //end of dashboard routes
});
