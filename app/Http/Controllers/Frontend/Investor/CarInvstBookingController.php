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

    public function reject(Request $request)
    {

        $success = CarBooking::find($request->id)->update(['booking_status_id' => 4,'cancle_reason'=>$request->cancel_reason ,'cancel_user_id'=>Auth::id()]);

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
        

        $booking = CarBooking::with(['user','car.category','car.user','city.country'])->find($id);
        return view('frontend.invest.detailcarbooking', compact('booking'));
    }



    public function listbookings($type,Request $request)
    { 
    if($type=='all'){
       $allbookings = Car::join('countries', 'countries.id', '=', 'cars.country_id')->join('car_bookings', 'cars.id', '=', 'car_bookings.car_id')->join('booking_status', 'booking_status.id', '=', 'aqar_bookings.booking_status_id')->select('*','aqar_bookings.id as book_id')
       ->where('cars.user_id',Auth::id())->when($request->search_id, function ($query) use($request) {
        $query->where('car_bookings.id','=',$request->search_id)->orwhere('car_bookings.car_id','=',$request->search_id);
        
       })->paginate(10);}
       else if($type=='app'){
       $allbookings = Car::join('countries', 'countries.id', '=', 'cars.country_id')->join('car_bookings', 'cars.id', '=', 'car_bookings.car_id')->join('booking_status', 'booking_status.id', '=', 'aqar_bookings.booking_status_id')->select('*','aqar_bookings.id as book_id')
       ->where('cars.user_id',Auth::id())->where('car_bookings.type','application')->when($request->search_id, function ($query) use($request) {
        $query->where('car_bookings.id','=',$request->search_id)->orwhere('car_bookings.car_id','=',$request->search_id);
        
       })->paginate(10);
       }else if($type=='web'){
       $allbookings = Car::join('countries', 'countries.id', '=', 'cars.country_id')->join('car_bookings', 'cars.id', '=', 'car_bookings.car_id')->join('booking_status', 'booking_status.id', '=', 'aqar_bookings.booking_status_id')->select('*','aqar_bookings.id as book_id')
       ->where('cars.user_id',Auth::id())->where('car_bookings.type','website')->when($request->search_id, function ($query) use($request) {
        $query->where('car_bookings.id','=',$request->search_id)->orwhere('car_bookings.car_id','=',$request->search_id);
        
        })->paginate(10);
       }else if($type=='ext'){
       $allbookings = Car::join('countries', 'countries.id', '=', 'cars.country_id')->join('car_bookings', 'cars.id', '=', 'car_bookings.car_id')->join('booking_status', 'booking_status.id', '=', 'aqar_bookings.booking_status_id')->select('*','aqar_bookings.id as book_id')
       ->where('cars.user_id',Auth::id())->where('car_bookings.type','external')->when($request->search_id, function ($query) use($request) {
        $query->where('car_bookings.id','=',$request->search_id)->orwhere('car_bookings.car_id','=',$request->search_id);
        
       })->paginate(10);
       }else if($type=='cancel'){
       $allbookings = Car::join('countries', 'countries.id', '=', 'cars.country_id')->join('car_bookings', 'cars.id', '=', 'car_bookings.car_id')->join('booking_status', 'booking_status.id', '=', 'aqar_bookings.booking_status_id')->select('*','aqar_bookings.id as book_id')
       ->where('cars.user_id',Auth::id())->where('car_bookings.booking_status_id',4)->when($request->search_id, function ($query) use($request) {
        $query->where('car_bookings.id','=',$request->search_id)->orwhere('car_bookings.car_id','=',$request->search_id);
        
        })->paginate(10);
        }else if($type=='archef'){
        $allbookings = Car::join('countries', 'countries.id', '=', 'cars.country_id')->join('car_bookings', 'cars.id', '=', 'car_bookings.car_id')->join('booking_status', 'booking_status.id', '=', 'aqar_bookings.booking_status_id')->select('*','aqar_bookings.id as book_id')
        ->where('cars.user_id',Auth::id())->whereIn('car_bookings.booking_status_id',[5,6])->when($request->search_id, function ($query) use($request) {
         $query->where('car_bookings.id','=',$request->search_id)->orwhere('car_bookings.car_id','=',$request->search_id);
         
         })->paginate(10);
        }else if(is_numeric($type)){
            $allbookings = Car::join('countries', 'countries.id', '=', 'cars.country_id')->join('car_bookings', 'cars.id', '=', 'car_bookings.car_id')->join('booking_status', 'booking_status.id', '=', 'aqar_bookings.booking_status_id')->select('*','aqar_bookings.id as book_id')
            ->where('cars.user_id',Auth::id())->where('car_bookings.car_id',$type)->when($request->search_id, function ($query) use($request) {
             $query->where('car_bookings.id','=',$request->search_id)->orwhere('car_bookings.car_id','=',$request->search_id);
             
             })->paginate(10);
    
       }

     //  return $allbookings->toArray()['data'];

       return view('frontend.invest.carlistbooking', compact('allbookings'));
    }

    public function show_extbooking($id)
    {
        $car=Car::find($id);
        $car['changed_price']=json_decode($car['changed_price']);
      
        return view('frontend.invest.addextcar',compact('car'));
    }

    public function add_extbooking(Request $request)
    {
        

        $rule = [
            'delivery_date' => 'date|required',
            'reciept_date' => 'date|after_or_equal:delivery_date',
            'id' => 'required',
            'total_price' => 'required',
            'day_num'=>'nullable',
            'customer_phone'=>'required',
            'customer_name'=>'required',


        ];
        $customMessages = [
            'required' => __('validation.attributes.required'),
        ];

        $validator = validator()->make($request->all(), $rule, $customMessages);

        if ($validator->fails()) {

            return $this->respondError('Validation Error.', $validator->errors(), 400);

        } else {

            $car=Car::with('user')->find($request->id);
           // $user=User::where('phone',$request->customer_phone)->first();


            if($car->fixed_price){
                $fixed_price=$car['fixed_price'];
                
            }else{
                $price=json_decode($car['changed_price'])->day_num;
                $key=array_search ($request->day_num, $price);
                $changedprice=json_decode($car['changed_price'])->price[$key];
                $data['day_num'] = array($request->day_num);
                $data['price'] = array($changedprice);
                $changed_price=json_encode($data)!=null?json_encode($data, JSON_NUMERIC_CHECK):null;     
            }
            $input = $request->all();
            $input['customer_phone'] = $request->customer_phone;
            $input['customer_name'] = $request->customer_name;
            $input['car_id'] =$request->id;
            $input['day_num'] =$request->day_num;
            $input['total_price'] =$request->total_price;
            $input['fixed_price'] = $fixed_price ?? null;
            $input['changed_price'] = $changed_price ?? null;
            $input['booking_status_id'] =2;
            $input['city_id']=$car['city_id'];
            $input['comision']=$car->user['comision'];
            $input['type']='external';

            $success = CarBooking::create($input);

            if ($success) {
                Alert::success('Success', __('site.add_externalbooking_successfully'));
            } else {
                    Alert::error('Error', __('site.add_externalbooking_faild'));
    
            }
            return redirect()->route('invst.cars.index');


        }
    }




}
