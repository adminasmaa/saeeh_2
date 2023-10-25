<?php

namespace App\Http\Controllers\Frontend\Investor;

use Response;


use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\User;
use App\Models\Category;
use App\Models\AnotherRoom;
use App\Models\Area;
use App\Models\City;
use App\Models\Country;
use App\Models\AdsStatus;
use App\Models\CarBooking;
use Alert;
use App\Repositories\Interfaces\CarRepositoryInterface;
use App\Repositories\Eloquent\CarRepository;
use App\Services\TwoFactorService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;



class CarInvstBookingController extends Controller
{


    protected $CarRepository;
 
    public function __construct()
    {
        $this->CarRepository=new CarRepository();
    }

  

    public function accept($id)
    {

        $success = CarBooking::find($id)->update(['booking_status_id' => 2]);

        if ($success) {
            Alert::success('Success', __('site.accept_successfully'));
        } else {
                Alert::error('Error', __('site.accept_faild'));

        }

        return back();
    }

    public function reject($id)
    {

        $success = CarBooking::find($id)->update(['booking_status_id' => 4]);

        if ($success) {
            Alert::success('Success', __('site.reject_successfully'));
        } else {
                Alert::error('Error', __('site.reject_faild'));

        }

        return back();
    }

    public function attend($id)
    {

        $success = CarBooking::find($id)->update(['booking_status_id' => 5]);

        if ($success) {
            Alert::success('Success', __('site.attend_successfully'));
        } else {
                Alert::error('Error', __('site.attend_faild'));

        }

        return back();
    }

    public function notattend($id)
    {

        $success = CarBooking::find($id)->update(['booking_status_id' => 6]);

        if ($success) {
            Alert::success('Success', __('site.notattend_successfully'));
        } else {
                Alert::error('Error', __('site.notattend_faild'));

        }

        return back();
    }

    public function bookingDetails($id)
    {
        

        $booking = CarBooking::with(['user','car'])->find($id);

        return view('frontend.invest.detailbooking', compact('booking'));
    }



    public function listbookings($type,Request $request)
    { 
    if($type=='all'){
       $allbookings = Car::join('countries', 'countries.id', '=', 'cars.country_id')->join('car_bookings', 'cars.id', '=', 'car_bookings.car_id')
       ->where('cars.user_id',Auth::id())->when($request->search_id, function ($query) use($request) {
        $query->where('car_bookings.id','=',$request->search_id)->orwhere('car_bookings.car_id','=',$request->search_id);
        
       })->paginate(10);}
       else if($type=='app'){
       $allbookings = Car::join('countries', 'countries.id', '=', 'cars.country_id')->join('car_bookings', 'cars.id', '=', 'car_bookings.car_id')
       ->where('cars.user_id',Auth::id())->where('car_bookings.type','application')->when($request->search_id, function ($query) use($request) {
        $query->where('car_bookings.id','=',$request->search_id)->orwhere('car_bookings.car_id','=',$request->search_id);
        
       })->paginate(10);
       }else if($type=='web'){
       $allbookings = Car::join('countries', 'countries.id', '=', 'cars.country_id')->join('car_bookings', 'cars.id', '=', 'car_bookings.car_id')
       ->where('cars.user_id',Auth::id())->where('car_bookings.type','website')->when($request->search_id, function ($query) use($request) {
        $query->where('car_bookings.id','=',$request->search_id)->orwhere('car_bookings.car_id','=',$request->search_id);
        
        })->paginate(10);
       }else if($type=='ext'){
       $allbookings = Car::join('countries', 'countries.id', '=', 'cars.country_id')->join('car_bookings', 'cars.id', '=', 'car_bookings.car_id')
       ->where('cars.user_id',Auth::id())->where('car_bookings.type','external')->when($request->search_id, function ($query) use($request) {
        $query->where('car_bookings.id','=',$request->search_id)->orwhere('car_bookings.car_id','=',$request->search_id);
        
       })->paginate(10);
       }else if($type=='cancel'){
       $allbookings = Car::join('countries', 'countries.id', '=', 'cars.country_id')->join('car_bookings', 'cars.id', '=', 'car_bookings.car_id')
       ->where('cars.user_id',Auth::id())->where('car_bookings.booking_status_id',4)->when($request->search_id, function ($query) use($request) {
        $query->where('car_bookings.id','=',$request->search_id)->orwhere('car_bookings.car_id','=',$request->search_id);
        
        })->paginate(10);
        }else if($type=='archef'){
        $allbookings = Car::join('countries', 'countries.id', '=', 'cars.country_id')->join('car_bookings', 'cars.id', '=', 'car_bookings.car_id')
        ->where('cars.user_id',Auth::id())->whereIn('car_bookings.booking_status_id',[5,6])->when($request->search_id, function ($query) use($request) {
         $query->where('car_bookings.id','=',$request->search_id)->orwhere('car_bookings.car_id','=',$request->search_id);
         
         })->paginate(10);
        }else if(is_numeric($type)){
            $allbookings = Car::join('countries', 'countries.id', '=', 'cars.country_id')->join('car_bookings', 'cars.id', '=', 'car_bookings.car_id')
            ->where('cars.user_id',Auth::id())->where('car_bookings.car_id',$type)->when($request->search_id, function ($query) use($request) {
             $query->where('car_bookings.id','=',$request->search_id)->orwhere('car_bookings.car_id','=',$request->search_id);
             
             })->paginate(10);
    
       }

     //  return $allbookings->toArray()['data'];

       return view('frontend.invest.carlistbooking', compact('allbookings'));
    }



}
