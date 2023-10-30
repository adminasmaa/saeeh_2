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

        $success1 = AqarBooking::find($id)->update(['booking_status_id' => 5]);
        $aqarBooking = AqarBooking::find($id);
        $aqar=Aqar::with('user')->find($aqarBooking->aqar_id);
        $commision = str_replace('%','', $aqarBooking->comision);
        $price= ($commision/100)*$aqarBooking->total_price;
        $comm=Commission::create([
            'booking_id'=>$aqarBooking->id,
            'user_id'=>$aqar->user['id'],
            'price'=>$price,
            'type'=>'aqar',


        ]);
        $success=$aqarBooking->update(['commission_id' => $comm->id]);

        if ($success && $success1) {
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
        

        $booking = AqarBooking::with(['user','aqar.category','aqar.user','aqar.area','city.country'])->find($id);

        return view('frontend.invest.detailbooking', compact('booking'));
    }

    public function show_extbooking($id)
    {
        $aqar=Aqar::find($id);
        return view('frontend.invest.addextaqar',compact('aqar'));
    }

    public function add_extbooking(Request $request)
    {
        

        $rule = [
            'delivery_date' => 'date|required',
            'reciept_date' => 'date|after_or_equal:delivery_date',
            'id' => 'required',
            'total_price' => 'required',
            'person_num'=>'nullable',
            'customer_phone'=>'required',


        ];
        $customMessages = [
            'required' => __('validation.attributes.required'),
        ];

        $validator = validator()->make($request->all(), $rule, $customMessages);

        if ($validator->fails()) {

            return $this->respondError('Validation Error.', $validator->errors(), 400);

        } else {

            $aqar=Aqar::with('user')->find($request->id);
            $user=User::where('phone',$request->customer_phone)->first();


            if($aqar->fixed_price){
                $fixed_price=$aqar['fixed_price'];
                
            }else{
                $price=json_decode($aqar['changed_price'])->person_num;
                $key=array_search ($request->person_num, $price);
                $changedprice=json_decode($aqar['changed_price'])->price[$key];
                $data['person_num'] = array($request->person_num);
                $data['price'] = array($changedprice);
                $changed_price=json_encode($data)!=null?json_encode($data, JSON_NUMERIC_CHECK):null;     
            }
            $input = $request->all();
            $input['user_id'] = $user->id;
            $input['aqar_id'] =$request->id;
            $input['person_num'] =$request->person_num;
            $input['total_price'] =$request->total_price;
            $input['fixed_price'] = $fixed_price ?? null;
            $input['changed_price'] = $changed_price ?? null;
            $input['booking_status_id'] =2;
            $input['city_id']=$aqar['city_id'];
            $input['comision']=$aqar->user['comision'];
            $input['type']='external';

            $success = AqarBooking::create($input);

            if ($success) {
                Alert::success('Success', __('site.stop_successfully'));
            } else {
                    Alert::error('Error', __('site.stop_faild'));
    
            }
            return redirect()->route('invst.aqars.index');


        }
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
