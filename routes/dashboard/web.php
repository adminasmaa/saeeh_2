<?php


use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\CountryController;
use App\Http\Controllers\Dashboard\CityController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\QuestionController;
use App\Http\Controllers\Dashboard\ProblemController;
use App\Http\Controllers\Dashboard\MediatorController;
use App\Http\Controllers\Dashboard\SettingController;

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
        //questions
        Route::resource('questions', QuestionController::class);

        //problems
        Route::resource('problems', ProblemController::class);


        //Mediators
        Route::resource('mediators', MediatorController::class);

        //Setting
        Route::resource('settings', SettingController::class);


    }); //end of dashboard routes
});
