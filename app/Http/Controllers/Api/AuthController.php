<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class AuthController extends Controller
{


    public function register(Request $request)
    {


        $rule = [
            'email' => 'max:254|unique:users|email|required',
            'firstname' => 'required',
            'lastname' => 'required',
            'country_code' => 'required',
            'phone' => 'required|min:9',
            'password' => 'required|min:6',
            'c_password' => 'required_with:password|same:password',

        ];
        $customMessages = [
            'required' => __('validation.attributes.required'),
        ];

        $validator = validator()->make($request->all(), $rule, $customMessages);

        if ($validator->fails()) {

            return $this->respondError($validator->errors(), 422);

        } else {
            $input = $request->all();
            $input['password'] = bcrypt($input['password']);
            $set = '123456789';
            $code = substr(str_shuffle($set), 0, 4);
            $input['code'] = $code;
            $msg = trans('message.please verified your account') . "\n";
            $msg = $msg . trans('message.code activation') . "\n" . $code;
            send_sms_code($msg, $input['phone'], $input['country_code']);
            $user = User::create($input);

//        $user = User::create([
//            'firstname' => $request->firstname,
//            'lastname' => $request->lastname,
//            'country_code' => $request->country_code,
//            'email' => $request->email,
//            'phone' => $request->phone,
//            'password' => bcrypt($request->password),
//            'active' => 1,
//        ]);

            $success['token'] = $user->createToken('MyApp')->accessToken;
            $success['user'] = $user->only(['id', 'firstname', 'email', 'lastname', 'phone', 'country_code']);


            return $this->respondSuccess(200, trans('message.User register successfully.'), $success);
        }
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'country_code' => 'required',

            'phone' => 'required',
            'password' => 'required|min:6'
        ]);

        if ($validator->fails()) {
            return $this->respondError(400, $validator->errors());
        }
        if(auth()->attempt(['country_code' => $request->country_code,'phone' => $request->phone, 'password' => $request->password])){
            $user = Auth::user();
            if ($user->active) {
                $success['token'] = $user->createToken('MyApp')->accessToken;
                $success['user'] = $user->only(['id', 'firstname', 'email', 'lastname', 'phone','country_code']);

                return $this->respondSuccess(200, trans('message.User login successfully.'), $success,);
            } else {

                $set = '123456789';
                $code = substr(str_shuffle($set), 0, 4);
                $input['code'] = $code;
                $msg= trans('message.please verified your account') ."\n";
                $msg=$msg.trans('message.code activation')."\n".$code;
                send_sms_code($msg,$request->phone,$request->country_code);
                $success['token'] =  $user->createToken('MyApp')->accessToken;
                $success['user'] =  $user->only(['id','firstname','email','lastname','phone','country_code']);
                return $this->respondwarning($success,trans('message.account not verified'), ['error'=>trans('message.account not verified')],402);
            }
        } else {
            return $this->respondError(403, ['error' => trans('message.wrong credientials')]);
        }
    }
}
