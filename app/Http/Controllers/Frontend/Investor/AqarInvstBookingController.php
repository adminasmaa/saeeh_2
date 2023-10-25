<?php

namespace App\Http\Controllers\Frontend\Investor;

use Response;


use App\Http\Controllers\Controller;
use App\Models\Aqar;
use App\Models\User;
use App\Models\Category;
use App\Models\AnotherRoom;
use App\Models\Area;
use App\Models\City;
use App\Models\Country;
use App\Models\AdsStatus;
use App\Models\AqarService;
use App\Models\AqarSections;
use App\Models\AqarBooking;
use Alert;
use App\Repositories\Interfaces\AqarRepositoryInterface;
use App\Repositories\Eloquent\AqarRepository;
use App\Services\TwoFactorService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;



class AqarInvstBookingController extends Controller
{


    protected $AqarRepository;
 
    public function __construct()
    {
        $this->AqarRepository=new AqarRepository();
    }

  

    public function accept($id)
    {

        $success = AqarBooking::find($id)->update(['booking_status_id' => 2]);

        if ($success) {
            Alert::success('Success', __('site.accept_successfully'));
        } else {
                Alert::error('Error', __('site.accept_faild'));

        }

        return back();
    }

    public function reject($id)
    {

        $success = AqarBooking::find($id)->update(['booking_status_id' => 4]);

        if ($success) {
            Alert::success('Success', __('site.reject_successfully'));
        } else {
                Alert::error('Error', __('site.reject_faild'));

        }

        return back();
    }

    public function attend($id)
    {

        $success = AqarBooking::find($id)->update(['booking_status_id' => 5]);

        if ($success) {
            Alert::success('Success', __('site.attend_successfully'));
        } else {
                Alert::error('Error', __('site.attend_faild'));

        }

        return back();
    }

    public function notattend($id)
    {

        $success = AqarBooking::find($id)->update(['booking_status_id' => 6]);

        if ($success) {
            Alert::success('Success', __('site.notattend_successfully'));
        } else {
                Alert::error('Error', __('site.notattend_faild'));

        }

        return back();
    }

    public function bookingDetails($id)
    {
        

        $booking = AqarBooking::with(['user','aqar'])->find($id);

        return view('frontend.invest.detailbooking', compact('booking'));
    }



    public function listbookings($type,Request $request)
    { ;
        if($type=='all'){
       $allbookings = Aqar::join('countries', 'countries.id', '=', 'aqars.country_id')->join('aqar_bookings', 'aqars.id', '=', 'aqar_bookings.aqar_id')
       ->where('aqars.user_id',Auth::id())->when($request->search_id, function ($query) use($request) {
        $query->where('aqar_bookings.id','=',$request->search_id)->orwhere('aqar_bookings.aqar_id','=',$request->search_id);
        
       })->paginate(10);}
       else if($type=='app'){
       $allbookings =Aqar::join('countries', 'countries.id', '=', 'aqars.country_id')->join('aqar_bookings', 'aqars.id', '=', 'aqar_bookings.aqar_id')
       ->where('aqars.user_id',Auth::id())->where('aqar_bookings.type','application')->when($request->search_id, function ($query) use($request) {
        $query->where('aqar_bookings.id','=',$request->search_id)->orwhere('aqar_bookings.aqar_id','=',$request->search_id);
        
       })->paginate(10);
       }else if($type=='web'){
       $allbookings =Aqar::join('countries', 'countries.id', '=', 'aqars.country_id')->join('aqar_bookings', 'aqars.id', '=', 'aqar_bookings.aqar_id')
       ->where('aqars.user_id',Auth::id())->where('aqar_bookings.type','website')->when($request->search_id, function ($query) use($request) {
        $query->where('aqar_bookings.id','=',$request->search_id)->orwhere('aqar_bookings.aqar_id','=',$request->search_id);
        
        })->paginate(10);
       }else if($type=='ext'){
       $allbookings =Aqar::join('countries', 'countries.id', '=', 'aqars.country_id')->join('aqar_bookings', 'aqars.id', '=', 'aqar_bookings.aqar_id')
       ->where('aqars.user_id',Auth::id())->where('aqar_bookings.type','external')->when($request->search_id, function ($query) use($request) {
        $query->where('aqar_bookings.id','=',$request->search_id)->orwhere('aqar_bookings.aqar_id','=',$request->search_id);
        
       })->paginate(10);
       }else if($type=='cancel'){
       $allbookings =Aqar::join('countries', 'countries.id', '=', 'aqars.country_id')->join('aqar_bookings', 'aqars.id', '=', 'aqar_bookings.aqar_id')
       ->where('aqars.user_id',Auth::id())->where('aqar_bookings.booking_status_id',4)->when($request->search_id, function ($query) use($request) {
        $query->where('aqar_bookings.id','=',$request->search_id)->orwhere('aqar_bookings.aqar_id','=',$request->search_id);
        
        })->paginate(10);
        }else if($type=='archef'){
        $allbookings =Aqar::join('countries', 'countries.id', '=', 'aqars.country_id')->join('aqar_bookings', 'aqars.id', '=', 'aqar_bookings.aqar_id')
        ->where('aqars.user_id',Auth::id())->whereIn('aqar_bookings.booking_status_id',[5,6])->when($request->search_id, function ($query) use($request) {
         $query->where('aqar_bookings.id','=',$request->search_id)->orwhere('aqar_bookings.aqar_id','=',$request->search_id);
         
         })->paginate(10);
        }else if(is_numeric($type)){
        $allbookings =Aqar::join('countries', 'countries.id', '=', 'aqars.country_id')->join('aqar_bookings', 'aqars.id', '=', 'aqar_bookings.aqar_id')
        ->where('aqars.user_id',Auth::id())->where('aqar_bookings.aqar_id',$type)->when($request->search_id, function ($query) use($request) {
         $query->where('aqar_bookings.id','=',$request->search_id)->orwhere('aqar_bookings.aqar_id','=',$request->search_id);
         
         })->paginate(10);

       }

       //return $allbookings->toArray()['data'];

       return view('frontend.invest.aqarlistbooking', compact('allbookings'));
    }



}
