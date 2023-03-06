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
            'phone' => 'required|min:9|unique:users',
            'password' => 'required|min:6',
//            'c_password' => 'nullable_with:password|same:password',

        ];
        $customMessages = [
            'required' => __('validation.attributes.required'),
        ];

        $validator = validator()->make($request->all(), $rule, $customMessages);

        if ($validator->fails()) {

            return $this->respondError('Validation Error.', $validator->errors(),400);

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



//            $success['token'] = $user->createToken('MyApp')->accessToken;
            $success['user'] = $user->only(['id', 'firstname', 'email', 'lastname', 'phone', 'country_code']);


            return $this->respondSuccess($success, trans('message.User register successfully.'));
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
            return $this->respondError('Validation Error.', $validator->errors(),400);
        }
        if (auth()->attempt(['country_code' => $request->country_code, 'phone' => $request->phone, 'password' => $request->password])) {
            $user = Auth::user();
            if ($user->active) {
                $success['token'] = $user->createToken('MyApp')->accessToken;
                $success['user'] = $user->only(['id', 'firstname', 'email', 'lastname', 'phone', 'country_code']);

                return $this->respondSuccess($success, trans('message.User login successfully.'));
            } else {

                $set = '123456789';
                $code = substr(str_shuffle($set), 0, 4);
                $input['code'] = $code;
                $msg = trans('message.please verified your account') . "\n";
                $msg = $msg . trans('message.code activation') . "\n" . $code;
                send_sms_code($msg, $request->phone, $request->country_code);
                $success['token'] = $user->createToken('MyApp')->accessToken;
                $success['user'] = $user->only(['id', 'firstname', 'email', 'lastname', 'phone', 'country_code']);
                return $this->respondwarning($success,trans('message.account not verified'), ['error'=>trans('message.account not verified')],402);
            }
        } else {
            return $this->respondError(trans('message.wrong credientials'), ['error'=>trans('message.wrong credientials')],403);
        }
    }

    public function activateRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'country_code' => 'required_without:userId',
            'phone' => 'required_without:userId',
            'code' => 'required|min:3',
            'userId' => 'required_without:phone',
        ]);

        if ($validator->fails()) {
            return $this->respondError('Validation Error.', $validator->errors(),400);
        }
        $country_code = $request->country_code;
        $phone = $request->phone;
        $user = User::where(function ($query) use ($country_code, $phone) {
            $query->where('country_code', $country_code)->where('phone', $phone);
        })->orWhere('id', $request->userId)->first();
        if ($user) {
            if ($user->active) {
                ;
                $success['token'] = $user->createToken('MyApp')->accessToken;
                $success['user'] = $user->only(['id', 'firstname', 'email', 'lastname', 'phone', 'country_code']);
                return $this->respondSuccess($success, trans('message.User already active.'));
            } else {
                $user->active = 1;
                $user->save();
                $success['token'] = $user->createToken('MyApp')->accessToken;
                $success['user'] = $user->only(['id', 'firstname', 'email', 'lastname', 'phone', 'country_code']);
                return $this->respondSuccess($success, trans('message.User activate successfully.'));
            }
        } else {
            return $this->respondError(trans('message.code not correct'), ['error'=>trans('message.code not correct')],401);
        }
    }

    public function resendCode(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'country_code' => 'required_without:userId',
            'phone' => 'required_without:userId',
            'userId' => 'required_without:phone',
        ]);

        if ($validator->fails()) {
            return $this->respondError('Validation Error.', $validator->errors(),400);
        }
        $country_code = $request->country_code;
        $phone = $request->phone;
        $user = User::where(function ($query) use ($country_code, $phone) {
            $query->where('country_code', $country_code)->where('phone', $phone);
        })->orWhere('id', $request->userId)->first();
        if ($user) {

            $set = '123456789';
            $code = substr(str_shuffle($set), 0, 4);
            $msg = trans('message.please verified your account') . "\n";
            $msg = $msg . trans('message.code activation') . "\n" . $code;
            send_sms_code($msg, $request->phone, $request->country_code);
            $user->code = $code;
            $user->save();
            return $this->respondSuccess(json_decode('{}'), trans('message.message sent successfully.'));

        } else {
            return $this->respondError(trans('message.user not found'), ['error'=>trans('message.user not found')],404);
        }
    }

    public function forgetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'country_code' => 'required',
            'phone' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->respondError('Validation Error.', $validator->errors(),400);
        }
        $user = User::where('phone', $request->phone)->where('country_code', $request->country_code)->first();
        if ($user) {

            $set = '123456789';
            $code = substr(str_shuffle($set), 0, 4);
            $msg = trans('message.for change password') . "\n";
            $msg = $msg . trans('message.your code ') . "\n" . $code;
            send_sms_code($msg, $request->phone, $request->country_code);
            $user->code = $code;
            $user->save();
            return $this->respondSuccess(json_decode('{}'), trans('message.message sent successfully.'));

        } else {
            return $this->respondError(trans('message.user not found'), ['error'=>trans('message.user not found')],404);
        }
    }


    public function checkCode(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'country_code' => 'required_without:userId',
            'phone' => 'required_without:userId',
            'code' => 'required|min:3',
            'userId' => 'required_without:phone',
        ]);

        if ($validator->fails()) {
            return $this->respondError('Validation Error.', $validator->errors(),400);
        }
        $country_code = $request->country_code;
        $phone = $request->phone;
        $user = User::where(function ($query) use ($country_code, $phone) {
            $query->where('country_code', $country_code)->where('phone', $phone);
        })->orWhere('id', $request->userId)->first();
        if ($user) {
            return $this->respondSuccess(json_decode('{}'), trans('message.code correct.'));
        } else {
            return $this->respondError(trans('message.code not correct'), ['error'=>trans('message.code not correct')],401);
        }
    }


    public function resetpassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'country_code' => 'required_without:userId',
            'phone' => 'required_without:userId',
            'userId' => 'required_without:phone',
            'password' => 'required|min:6',
            'c_password' => 'same:password|min:6',
        ]);

        if ($validator->fails()) {
            return $this->respondError('Validation Error.', $validator->errors(),400);
        }
        $country_code = $request->country_code;
        $phone = $request->phone;
        $user = User::where(function ($query) use ($country_code, $phone) {
            $query->where('country_code', $country_code)->where('phone', $phone);
        })->orWhere('id', $request->userId)->first();
        if ($user) {
            $user->password = bcrypt($request->password);
            $user->active = 1;
            $user->save();
            return $this->respondSuccess(json_decode('{}'), trans('message.password reset successfully.'));
        } else {

            return $this->respondError(trans('message.user not found'), ['error'=>trans('message.user not found')],404);
        }
    }
}
