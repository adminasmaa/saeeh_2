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
            'first_name' => 'required',
            'comision'=>'required',
            'accept_term'=>'required',
            'city_id'=>'required',
            'comision'=>'required',
        ]);


        $request_data = $request->except(['password', 'password_confirmation', '_token']);

        $request_data['active'] = 0;
        $request_data['type'] = 'invest';

        $request_data['password'] = bcrypt($request->password);
        $request_data['username'] = $request->username;
        $request_data['firstname'] = $request->first_name;
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
            return redirect()->route('invst.confirmcode',[$user->id,1]);
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
    public function confirmcode($id,$type)
    {
        $invest=User::find($id);
        return view('frontend.invest.confirmcode' , compact('invest','type') );
    }

    public function confirmtion(Request $request)
    {

       
        $code=$request->code1.$request->code2.$request->code3.$request->code4;

        $user = User::where('id', $request->id)->where('code',$code)->first();
        if ($user) {
            $user= $user->makeVisible('password'); 
            $user->active = 1;
            $user->save();          
            Auth::login($user);

            Alert::success('Success', __('site.added_successfully'));
            return redirect()->route('invst.home');
        } else {
            Alert::error('Error', __('site.faild'));
            return redirect()->route('invst.confirmcode',[$request->id,1]);
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

    public function login()
    {
        $countries = Country::where('active', '=', 1)->get();

        return view('frontend.invest.login' , compact('countries'));


    }

    public function checklogin(Request $request)
    {

        $this->validate($request,[
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'password' => 'required|min:6',
        ]);

        if (auth()->attempt(['country_code' => $request->country_code, 'phone' => $request->phone, 'password' => $request->password ,'type' => 'invest'])) {
            $user = Auth::user();
            if($user->active){
            Auth::login($user);
            return redirect()->route('invst.home');
            }else{
                $set = '123456789';
                $code = substr(str_shuffle($set), 0, 4);
                $msg = trans('message.please verified your account') . "\n";
                $msg = $msg . trans('message.code activation') . "\n" . $code;
                send_sms_code($msg, $user->phone, $user->country_code);
                $user->code = $code;
                $user->save();
                return redirect()->route('invst.confirmcode',[$user->id,1]);
            }
        }else{
            return redirect()->back()
                ->with('error',__('message.wrong credientials'));
        }

    }

    public function forgetpassword()
    {
        $countries = Country::where('active', '=', 1)->get();
        return view('frontend.invest.forgetpassword', compact('countries'));

    }

    public function checkforget(Request $request)
    {
        $this->validate($request,[
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        ]);

        $user = User::where('phone', $request->phone)->where('country_code', $request->country_code)->where('type','invest')->first();
        if ($user) {

            $set = '123456789';
            $code = substr(str_shuffle($set), 0, 4);
            $msg = trans('message.for change password') . "\n";
            $msg = $msg . trans('message.your code ') . "\n" . $code;
            send_sms_code($msg, $request->phone, $request->country_code);
            $user->code = $code;
            $user->save();
            return redirect()->route('invst.confirmcode',[$user->id ,0]);
        }else{
            return redirect()->back()
                ->with('error',__('message.wrong credientials'));
        }

    }

    public function update_password(Request $request)
    {

       
        $code=$request->code1.$request->code2.$request->code3.$request->code4;

        $user = User::where('id', $request->id)->where('code',$code)->first()->makeVisible('password');

        if ($user) {        
            return redirect()->route('invst.changpass',[$request->id]);
        } else {
            return redirect()->back()
            ->with('error',__('message.wrong credientials'));
        }

    }
    public function changpass($id)
    {
        return view('frontend.invest.changepassword',compact('id'));
    }

    public function editpassword(Request $request)
    {
        $this->validate($request,[
            'password' => 'required|min:6',
            'new_password' => 'same:password|min:6',
        ]);

        $user = User::where('id', $request->id)->first();
        if ($user) {
            $password = bcrypt($request->password);
            $user->password = $password;
            $user->save();
            return redirect()->route('invst.login');
        }else{
            return redirect()->back()
                ->with('error',__('message.wrong credientials'));
        }
    }


    


   
    
}
