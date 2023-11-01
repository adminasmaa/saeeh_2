<?php


use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\CountryController;
use App\Http\Controllers\Dashboard\CityController;
use App\Http\Controllers\Dashboard\UserController;


use Illuminate\Support\Facades\Route;

Route::prefix(LaravelLocalization::setLocale())->middleware('localeSessionRedirect', 'localizationRedirect', 'localeViewPath')->group(function () {
    Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function () {

        Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        //users
        Route::resource('users', UserController::class);

        //roles
        Route::resource('roles', RoleController::class)->except(['show']);

        //countries
        Route::resource('countries', CountryController::class);

        //cities
        Route::resource('cities', CityController::class);

    }); //end of dashboard routes
});
