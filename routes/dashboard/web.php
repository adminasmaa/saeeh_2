<?php


use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\CountryController;
use App\Http\Controllers\Dashboard\CityController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\ServiceAqarController;
use App\Http\Controllers\Dashboard\QuestionController;
use App\Http\Controllers\Dashboard\ProblemController;
use App\Http\Controllers\Dashboard\MediatorController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\AdvertisingController;
use App\Http\Controllers\Dashboard\BrandController;
use App\Http\Controllers\Dashboard\CarController;
use App\Http\Controllers\Dashboard\CarCommentController;
use App\Http\Controllers\Dashboard\BookingController;
use App\Http\Controllers\Dashboard\PlaceController;
use App\Http\Controllers\Dashboard\PlaceCommentController;
use App\Http\Controllers\Dashboard\AquarCategoryController;
use App\Http\Controllers\Dashboard\AqarController;
use App\Http\Controllers\Dashboard\AreaController;
use App\Http\Controllers\Dashboard\ServiceController;
use App\Http\Controllers\Dashboard\FloorController;
use App\Http\Controllers\Dashboard\FloorNumberController;
use App\Http\Controllers\Dashboard\FreeServiceController;
use App\Http\Controllers\Dashboard\KitchenController;
use App\Http\Controllers\Dashboard\LaundryController;
use App\Http\Controllers\Dashboard\CrewController;
use App\Http\Controllers\Dashboard\BathRoomController;
use App\Http\Controllers\Dashboard\AnotherRoomController;
use App\Http\Controllers\Dashboard\ConditionTypeController;
use App\Http\Controllers\Dashboard\MessageController;
use App\Http\Controllers\Dashboard\NotificationController;
use App\Http\Controllers\Dashboard\AqarBookingController;
use App\Http\Controllers\Dashboard\CommissionController;
use App\Http\Controllers\Dashboard\CarPositionController;
use App\Http\Controllers\Dashboard\PlaceTableController;
use App\Http\Controllers\Dashboard\BalanceController;
use App\Http\Controllers\Dashboard\InvoiceController;
use App\Http\Controllers\Dashboard\PlaceCategoryController;
use App\Http\Controllers\Dashboard\SectionController;
use App\Http\Controllers\Dashboard\DepositController;
use App\Http\Controllers\Dashboard\PoolController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\ContactController;
use App\Http\Controllers\Dashboard\AqarCommentController;
use App\Http\Controllers\Dashboard\AqarSettingController;
use App\Http\Controllers\Dashboard\ReviewElementController;
use App\Http\Controllers\Dashboard\AqarReviewController;
use App\Http\Controllers\Dashboard\CarReviewController;
use App\Http\Controllers\Dashboard\PlaceReviewController;
use App\Http\Controllers\Dashboard\AdsStatusController;
use App\Http\Controllers\Dashboard\BookingStatusController;

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
        Route::get('addCity', 'App\Http\Controllers\Dashboard\CountryController@AddCity')->name('addCity');
        Route::resource('cities', CityController::class);
        Route::get('countrycities/{id}', 'App\Http\Controllers\Dashboard\CityController@countrycities')->name('countrycities');
        Route::get('categorycities/{id}', 'App\Http\Controllers\Dashboard\CityController@categorycities')->name('categorycities');
        Route::get('roomnumbers/{id}', 'App\Http\Controllers\Dashboard\AqarController@roomnumbers')->name('roomnumbers');

        //categories
        Route::resource('categories', CategoryController::class);

        //DeleteSubCategories
        Route::get('DeleteSubCategories/{id}', 'App\Http\Controllers\Dashboard\CategoryController@destroy')->name('DeleteSubCategories');
        Route::get('SubCategories/{id}', 'App\Http\Controllers\Dashboard\CategoryController@SubCategories')->name('SubCategories');
        Route::get('DeleteHomeServices/{id}', 'App\Http\Controllers\Dashboard\SettingController@destroy')->name('DeleteHomeServices');
        Route::get('DeleteSubPlaceCategories/{id}', 'App\Http\Controllers\Dashboard\PlaceCategoryController@destroy')->name('DeleteSubPlaceCategories');
        // Route::get('DeleteSubCarCategories/{id}', 'App\Http\Controllers\Dashboard\CategoryController@destroy2')->name('DeleteSubCarCategories');

        //cars
        Route::resource('cars', CarController::class);
        //contacts
        Route::resource('contacts', ContactController::class);

        //brands
        Route::resource('brands', BrandController::class);

        //car_comments
        Route::resource('car_comments', CarCommentController::class);

        //bookings
        Route::resource('bookings', BookingController::class);
        Route::get('acceptcarbooking/{car_id}', 'App\Http\Controllers\Dashboard\BookingController@acceptbooking')->name('acceptcarbooking');
        Route::get('rejectcarbooking/{car_id}', 'App\Http\Controllers\Dashboard\BookingController@rejectbooking')->name('rejectcarbooking');
        Route::put('confirmcarRejectbooking/{bookid}', 'App\Http\Controllers\Dashboard\BookingController@confirmRejectbooking')->name('confirmcarRejectbooking');


        //places
        Route::resource('places', PlaceController::class);
        Route::resource('place_categories', PlaceCategoryController::class);
        Route::get('DeletePlaceTable/{id}', 'App\Http\Controllers\Dashboard\PlaceController@destroy2')->name('DeletePlaceTable');

        //place_comments
        Route::resource('place_comments', PlaceCommentController::class);

        //aqars
        Route::resource('aqars', AqarController::class);
        Route::resource('aqar_comments', AqarCommentController::class);
        Route::resource('services_aqars', ServiceAqarController::class);
        Route::get('DeleteServiceAqar/{id}', 'App\Http\Controllers\Dashboard\ServiceAqarController@destroy2')->name('DeleteServiceAqar');

        //aquarcategories
        Route::resource('aquarcategories', AquarCategoryController::class);
        Route::resource('aquarbooking', AqarBookingController::class);
        Route::get('acceptbooking/{bookid}', 'App\Http\Controllers\Dashboard\AqarBookingController@acceptbooking')->name('acceptbooking');
        Route::get('rejectbooking/{bookid}', 'App\Http\Controllers\Dashboard\AqarBookingController@rejectbooking')->name('rejectbooking');
        Route::put('confirmRejectbooking/{bookid}', 'App\Http\Controllers\Dashboard\AqarBookingController@confirmRejectbooking')->name('confirmRejectbooking');



        //services
//        Route::resource('services', ServiceController::class);
//        Route::resource('free_services', FreeServiceController::class);
//        Route::resource('kitchens', KitchenController::class);
//        Route::resource('laundries', LaundryController::class);
//        Route::resource('crews', CrewController::class);
//        Route::resource('bathrooms', BathRoomController::class);
//        Route::resource('another_rooms', AnotherRoomController::class);
//        Route::resource('conditioning_types', ConditionTypeController::class);
//
//        //car_positions
//        Route::resource('car_positions', CarPositionController::class);

        //place_tables
        Route::resource('place_tables', PlaceTableController::class);

//        //floors
//        Route::resource('floors', FloorController::class);
//        Route::resource('floor_numbers', FloorNumberController::class);

        //areas
        Route::resource('areas', AreaController::class);
        Route::get('cityareas/{id}', 'App\Http\Controllers\Dashboard\AreaController@cityareas')->name('cityareas');

        //pools
        Route::resource('pools', PoolController::class);

        //messages
        Route::resource('message', MessageController::class);

        //notifications
        Route::resource('notifications', NotificationController::class);

        //commissions
       // Route::resource('commissions', CommissionController::class);
        Route::get('/commissions/{type}/{pay}', 'App\Http\Controllers\Dashboard\CommissionController@index')->name('commissions');
        Route::post('/uploadweasel', 'App\Http\Controllers\Dashboard\CommissionController@uploadweasel')->name('uploadweasel');

        //questions
        Route::resource('questions', QuestionController::class);

        //problems
        Route::resource('problems', ProblemController::class);

        //Mediators
        Route::resource('mediators', MediatorController::class);

        //Setting
        Route::resource('settings', SettingController::class);

        //advertising
        Route::resource('advertisings', AdvertisingController::class);

        //balances
        Route::resource('balances', BalanceController::class);

        //invoices
        Route::resource('invoices', InvoiceController::class);

        Route::get('/aqars/getsetting/{id}', 'App\Http\Controllers\Dashboard\AqarController@getsetting');

        Route::get('/aqars/getsetting1/{id}/{id2}', 'App\Http\Controllers\Dashboard\AqarController@getsetting1');

        Route::get('aqar_setting/editsetting', 'App\Http\Controllers\Dashboard\AqarSettingController@editsetting')->name('aqar_setting.edit');

        Route::get('/aqarsetting/getsetting/{id}', 'App\Http\Controllers\Dashboard\AqarSettingController@getsetting');

        Route::get('/aqarsetting/active_input_display/{id}/{id2}', 'App\Http\Controllers\Dashboard\AqarSettingController@active_input_display');

        Route::get('/aqarsetting/active_input_required/{id}/{id2}', 'App\Http\Controllers\Dashboard\AqarSettingController@active_input_required');
        //deposits
       // Route::resource('deposits', DepositController::class);

       Route::get('/deposits/{type}/{pay}', 'App\Http\Controllers\Dashboard\DepositController@index')->name('deposits');
       Route::post('/uploaddepositweasel', 'App\Http\Controllers\Dashboard\DepositController@uploadweasel')->name('uploaddepositweasel');;

        //sections
        Route::resource('sections', SectionController::class);

        //reviewElements
        Route::resource('reviewElements', ReviewElementController::class);

        //aqar_reviews
        Route::resource('aqar_reviews', AqarReviewController::class);

        //car_reviews
        Route::resource('car_reviews', CarReviewController::class);

        //place_reviews
        Route::resource('place_reviews', PlaceReviewController::class);

        //AdsStatus
        Route::resource('ads_status', AdsStatusController::class);

        //BookingStatus
        Route::resource('booking_status', BookingStatusController::class);

    }); //end of dashboard routes
});
