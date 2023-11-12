<?php

namespace App\Http\Controllers\Frontend\Investor;

use App\Http\Controllers\Controller;
use App\Models\Aqar;
use App\Models\Car;
use App\Models\User;
use App\Models\Category;
use App\Models\AnotherRoom;
use App\Models\Area;
use App\Models\City;
use App\Models\Country;
use App\Models\Contact;
use App\Models\AdsStatus;
use App\Models\AqarBooking;
use App\Models\CarBooking;
use App\Models\InvestCoditions;
use Response;
use Illuminate\Http\Request;
use Validator;
use Alert;
use App\Models\Commission;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{


    public function index()
    {

        if(Auth::user()->type=='invest' && (Auth::user()->account_type_id ==1||Auth::user()->account_type_id ==2||Auth::user()->account_type_id ==3||Auth::user()->account_type_id ==4)){
            $ads = Aqar::where('user_id',Auth::id())->get();
            $bookings=AqarBooking::join('aqars', 'aqar_bookings.aqar_id', '=', 'aqars.id')->where('aqars.user_id',Auth::id())->get();
            $commisions=Commission::where('user_id',Auth::id())->where('type','aqar')->get();
        }else if(Auth::user()->type=='invest' && Auth::user()->account_type_id ==5){
            $ads = Car::where('user_id',Auth::id())->get();
            $bookings=CarBooking::join('car', 'car_bookings.car_id', '=', 'cars.id')->where('cars.user_id',Auth::id())->get();
            $commisions=Commission::where('user_id',Auth::id())->where('type','car')->get();
        }
        return view('frontend.invest.index' , compact('ads','bookings','commisions'));

    }

    public function countrycities($id)
    {

        $cities = City::where('country_id', $id)->get();
       return $cities;
        return Response::json($cities);


    }
    public function cityareas($id)
    {
        $areas = Area::where('city_id', $id)->get();

        return Response::json($areas);

    }

    public function SubCategories($id)
    {

        $subcategories = Category::where('parent_id', $id)->get();

        return Response::json($subcategories);


    }

    public function addContacts(Request $request)
    {



        $validation = Validator::make($request->all(), [
            'name' => 'required|string',
            'message' => 'required|string',
            'phone' => 'required|unique:contacts',
        ]);

        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()], 422);
        }

        $request_data = $request->except('_token');
        $request_data['user_id'] = Auth::id() ?? '';

      $data=Contact::create($request_data);

        return response()->json(['status' => true, 'content' => 'success', 'data' => $data]);




    }

    public function conditions(Request $request)
    {

        $conditions=InvestCoditions::where('user_id',Auth::id())->first();

        return view('frontend.invest.conditions' , compact('conditions'));

    }


    public function add_conditions(Request $request)
    {

        $validation = Validator::make($request->all(), [
            'conditions' => 'required|string',
        ]);

        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()], 422);
        }

        $request_data = $request->except('_token');
        $request_data['user_id'] = Auth::id() ?? '';
        $request_data['conditions'] = $request->conditions;

        $data=InvestCoditions::updateOrCreate(['user_id' => Auth::id()],$request_data);

        if ($data) {
            Alert::success('Success', __('site.updated_successfully'));
            return redirect()->route('invst.home');
        } else {
                Alert::error('Error', __('site.update_faild'));
                return back();

        }

        



    }

    



}
