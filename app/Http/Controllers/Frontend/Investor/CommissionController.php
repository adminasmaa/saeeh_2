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
use App\Models\Commission;
use Alert;
use App\Repositories\Interfaces\AqarRepositoryInterface;
use App\Repositories\Eloquent\AqarRepository;
use App\Services\TwoFactorService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;



class CommissionController extends Controller
{

 
    public function __construct()
    {
    }

    public function listaqarcomm($type,$pay)
    { 
       if($type=='aqar'&& $pay=='unpaid'){
       $allcomms = AqarBooking::with('user','city.country')->join('commissions', 'aqar_bookings.commission_id', '=', 'commissions.id')
       ->where('commissions.user_id',Auth::id())->where('commissions.status',0)->where('commissions.type','aqar')->paginate(10);}
       else if($type=='aqar'&& $pay=='paid'){
        $allcomms = AqarBooking::with('user','city.country')->join('commissions', 'aqar_bookings.commission_id', '=', 'commissions.id')
        ->where('commissions.user_id',Auth::id())->where('commissions.status',1)->where('commissions.type','aqar')->paginate(10);}
       else if($type=='car'&& $pay=='unpaid'){
        $allcomms = AqarBooking::with('user','city.country')->join('commissions', 'aqar_bookings.commission_id', '=', 'commissions.id')
        ->where('commissions.user_id',Auth::id())->where('commissions.status',0)->where('commissions.type','aqar')->paginate(10);}
        else if($type=='car'&& $pay=='paid'){
            $allcomms = AqarBooking::with('user','city.country')->join('commissions', 'aqar_bookings.commission_id', '=', 'commissions.id')
            ->where('commissions.user_id',Auth::id())->where('commissions.status',1)->where('commissions.type','aqar')->paginate(10);}
        $type='aqar';
          //  return $allcomms->toArray()['data'];
       return view('frontend.invest.listcommisions', compact('allcomms','type'));
    }

    public function confirm_pay(Request $request)
    { 
        $id=$request->id;
        $success = Commission::find($id)->update(['status' => 1]);

        if ($success) {
            Alert::success('Success', __('site.payment_successfully'));
        } else {
                Alert::error('Error', __('site.payment_faild'));

        }

        return back();
    }



}
