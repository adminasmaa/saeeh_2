<?php

namespace App\Http\Controllers\Frontend\Investor;

use Response;


use App\Http\Controllers\Controller;

use Alert;
use App\Models\AccountType;
use App\Services\TwoFactorService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use App\Models\Country;
use App\Models\City;
use App\Models\User;
use App\Models\Setting;
use Validator;



class AuthController extends Controller
{

    public function register()
    {

        $AccountTypes = AccountType::all();
        $countries = Country::where('active', '=', 1)->get();
        $cities = City::where('active', '=', 1)->get();
        $settings = Setting::first();
        return view('frontend.invest.register' , compact('AccountTypes','countries','cities','settings') );


    }
     public function createaccount(Request $request)
    {
       // return $request;
        $this->validate($request,[
            'email' => 'required|email|string|unique:users',
            'phone' => 'required|unique:users|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'password' => 'required|min:6',    
            'c_password' => 'required|same:password',
            'firstname' => 'required',
            'comision'=>'required',
            'accept_term'=>'required'
        ]);


        $request_data = $request->except(['password', 'password_confirmation', '_token']);

        $request_data['active'] = 1;
        $request_data['type'] = 'invest';

        $request_data['password'] = bcrypt($request->password);
        $request_data['username'] = $request->username;
        $request_data['firstname'] = $request->firstname;
        $request_data['account_type_id'] = $request->account_type;
        $request_data['comision '] = $request->comision;
        $request_data['country_code '] = $request->country_code;


        $user = User::create($request_data);

        if ($user) {
            Alert::success('Success', __('site.added_successfully'));
        } else {
                Alert::error('Error', __('site.faild'));

        }

        return back();

    }
}
