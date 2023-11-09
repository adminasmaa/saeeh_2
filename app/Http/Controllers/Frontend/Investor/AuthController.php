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

        $set = '123456789';
        $code = substr(str_shuffle($set), 0, 4);
        $msg = trans('message.please verified your account') . "\n";
        $msg = $msg . trans('message.code activation') . "\n" . $code;
        send_sms_code($msg, $request->phone, $request->country_code);
        $user->code = $code;
        $user->save();

        if ($user) {
            Alert::success('Success', __('site.added_successfully'));
            return redirect()->route('invst.confirmcode',[$user->id]);
        } else {
                Alert::error('Error', __('site.faild'));
                return back();

        }

        

    }
    public function updateprofile($id)
    {
        $invest=User::find($id);
        $AccountTypes = AccountType::all();
        $countries = Country::where('active', '=', 1)->get();
        $cities = City::where('active', '=', 1)->get();
        $settings = Setting::first();
        return view('frontend.invest.register' , compact('AccountTypes','countries','cities','settings','invest') );
    }
    public function updateaccount(Request $request, $id)
    {
        $invest=User::find($id);
        $this->validate($request,[
            'email' => 'required|email|string|unique:users',
            'phone' => 'required|unique:users|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'password' => 'min:6',    
            'c_password' => 'same:password',
            'firstname' => 'required',
            'comision'=>'required',
            'accept_term'=>'required'
        ]);
        $request_data = $request->except(['password', 'password_confirmation', '_token']);
        if($request['password']){
        $request_data['password'] = bcrypt($request->password);
        }
        $invest->update($request_data);
        if ($invest) {
            Alert::success('Success', __('site.added_successfully'));
        } else {
                Alert::error('Error', __('site.faild'));

        }

        return back();

    }
    public function confirmcode($id)
    {
        $invest=User::find($id);
        return view('frontend.invest.confirmcode' , compact('invest') );
    }

    public function confirmtion(Request $request)
    {

       
        $code=$request->code1.$request->code2.$request->code3.$request->code4;

        $user = User::where('id', $request->id)->where('code',$code)->first()->makeVisible('password');

        if ($user) {
            $user = Auth::user();
            Auth::login($user);

            Alert::success('Success', __('site.added_successfully'));
            return redirect()->route('invst.home');
        } else {
            Alert::error('Error', __('site.faild'));
            return redirect()->route('invst.confirmcode',[$request->id]);
        }

    }
    public function resendcode($id)
    {

        $user = User::find($id);

        $set = '123456789';
        $code = substr(str_shuffle($set), 0, 4);
        $msg = trans('message.please verified your account') . "\n";
        $msg = $msg . trans('message.code activation') . "\n" . $code;
        send_sms_code($msg, $user->phone, $user->country_code);
        $user->code = $code;
        $user->save();

        if ($user) {
            Alert::success('Success', __('site.resend_successfully'));
            return back();
        } else {
                Alert::error('Error', __('site.faild'));
                return back();

        }     

    }

   
    
}
