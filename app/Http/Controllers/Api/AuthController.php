<?php

namespace App\Http\Controllers\Api;

use App\Models\Freq_question;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use DB;

class AuthController extends Controller
{

    public function freqquestion(Request $request)
    {


        $questions = Freq_question::get()->map(function($question){
            $question->answer = preg_replace( "/\r|\n/", "", strip_tags($question->answer) ) ?? '';
            return $question;
        });

        if (count($questions)) {

            return $this->respondSuccess($questions, trans('message.data retrieved successfully.'));



        } else {
            return $this->respondErrorArray(__('message.Data not found.'), ['error' => __('message.Data not found.')], 200);

        }

    }

    public function updateProfile(Request $request)
    {
        $rule = [
            'email' => 'max:254|email|nullable',
            'firstname' => 'nullable',
            'lastname' => 'nullable',
            'password' => 'nullable',
            'c_password' => 'nullable|same:password',
            'country_code' => 'nullable',
            'phone' => 'nullable|min:9',

        ];
        $customMessages = [
            'required' => __('validation.attributes.required'),
        ];

        $validator = validator()->make($request->all(), $rule, $customMessages);

        if ($validator->fails()) {

            return $this->respondError('Validation Error.', $validator->errors(), 400);

        } else {

            $user = User::findorfail(Auth::id());

            $user->firstname = isset($request->firstname) ? $request->firstname : $user->firstname;
            $user->lastname = isset($request->lastname) ? $request->lastname : $user->lastname;
            $user->email = isset($request->email) ? $request->email : $user->email;
            $user->phone = isset($request->phone) ? $request->phone : $user->phone;
            $user->country_code = isset($request->country_code) ? $request->country_code : $user->country_code;
            $user->password = bcrypt($request['password']) ?? '';

            $user->save();
            $success['token'] = $user->createToken('MyApp')->accessToken;
            $success['user'] = $user->only(['id', 'firstname', 'email', 'lastname']);


            return $this->respondSuccess($success, trans('message.User updated successfully'));


        }

    }

    public function logout()
    {

        Auth::user()->token()->revoke();


        return $this->respondSuccess(null, trans('message.logout'));


    }

    public function changepassword(Request $request)
    {
        $rule = [
            'password' => 'required',
            'new_password' => 'required|different:password|min:6',
            'c_password' => 'nullable|same:new_password',

        ];
        $customMessages = [
            'required' => __('validation.attributes.required'),
        ];

        $validator = validator()->make($request->all(), $rule, $customMessages);

        if ($validator->fails()) {

            return $this->respondError('Validation Error.', $validator->errors(), 400);

        } else {


            $user = Auth::user();

            if (Hash::check($request->input('password'), $user->password)) {
                $user->fill([
                    'password' => Hash::make($request->new_password)
                ])->save();
                $users = $user->only(['id', 'firstname', 'email', 'lastname', 'phone', 'country_code', 'code']);

                return $this->respondSuccess($users, trans('message.chanagepassword'));

            } else {
                return $this->respondError(trans('message.wrong credientials'), ['error' => trans('message.wrong credientials')], 403);

            }

        }

    }

    public function register(Request $request)
    {
        $rule = [
            'email' => 'max:254|unique:users|email|required',
            'firstname' => 'required',
            'lastname' => 'required',
            'country_code' => 'required',
            'phone' => 'required|min:9|unique:users',
            'password' => 'required|min:6',
            'c_password' => 'nullable|same:password',
            'device_token' => 'min:2'

        ];
        $customMessages = [
            'required' => __('validation.attributes.required'),
        ];

        $validator = validator()->make($request->all(), $rule, $customMessages);

        if ($validator->fails()) {

            return $this->respondError('Validation Error.', $validator->errors(), 400);

        } else {
            $input = $request->all();
            $input['password'] = bcrypt($input['password']);
            $set = '123456789';
            $code = substr(str_shuffle($set), 0, 4);
            $input['code'] = $code;
            $msg = trans('message.please verified your account') . "\n";
            $msg = $msg . trans('message.code activation') . "\n" . $code;
            send_sms_code($msg, $input['phone'], $input['country_code']);
            if ($request->device_token) {
                $guest = User::where('device_token', $request->device_token)->where('isguest', 1)->first();
                if ($guest) {
                    $input['isguest'] = 0;
                    $user1 = $guest->update($input);
                    $user = User::find($guest->id);

                } else {
                    $user = User::create($input);
                }
            }
//            $success['token'] = $user->createToken('MyApp')->accessToken;
            $success['user'] = $user->only(['id', 'firstname', 'email', 'lastname', 'phone', 'country_code', 'code']);


            return $this->respondSuccess($success, trans('message.User register successfully.'));
        }
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'country_code' => 'required',
            'phone' => 'required',
            'password' => 'required|min:6',
            'device_token' => 'min:2'
        ]);

        if ($validator->fails()) {
            return $this->respondError('Validation Error.', $validator->errors(), 400);
        }
        if (auth()->attempt(['country_code' => $request->country_code, 'phone' => $request->phone, 'password' => $request->password])) {
            $user = Auth::user();
            if ($user->active) {
                $user->device_token = $request->device_token;
                $user->save();
                if ($request->device_token) {
                    $guests = User::where('device_token', $request->device_token)->where('isguest', 1)->get();
                    foreach ($guests as $guest) {
                        DB::table('aqar_user')->where('user_id', $guest->id)->update(['user_id' => $user->id]);
                        DB::table('car_user')->where('user_id', $guest->id)->update(['user_id' => $user->id]);
                        DB::table('user_palace')->where('user_id', $guest->id)->update(['user_id' => $user->id]);
                        User::where('id', $guest->id)->delete();

                    }

                }
                $success['token'] = $user->createToken('MyApp')->accessToken;
                $success['user'] = $user->only(['id', 'firstname', 'email', 'lastname', 'phone', 'country_code', 'code']);

                return $this->respondSuccess($success, trans('message.User login successfully.'));
            } else {

                $set = '123456789';
                $code = substr(str_shuffle($set), 0, 4);
                $input['code'] = $code;
                $msg = trans('message.please verified your account') . "\n";
                $msg = $msg . trans('message.code activation') . "\n" . $code;
                send_sms_code($msg, $request->phone, $request->country_code);
//                $success['token'] = $user->createToken('MyApp')->accessToken;
                $success['user'] = $user->only(['id', 'firstname', 'email', 'lastname', 'phone', 'country_code', 'code']);
                return $this->respondwarning($success, trans('message.account not verified'), ['error' => trans('message.account not verified')], 402);
            }
        } else {
            return $this->respondError(trans('message.wrong credientials'), ['error' => trans('message.wrong credientials')], 403);
        }
    }


    public function guest(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'device_token' => 'required'

        ]);

        if ($validator->fails()) {
            return $this->respondError('Validation Error.', $validator->errors(), 400);
        } else {
            $input = $request->all();
            $input['isguest'] = 1;
            $user = User::create($input);
            $user->active = 1;
            $user->token = $user->createToken('MyApp')->accessToken;
            $user->save();
            $success['token'] = $user->createToken('MyApp')->accessToken;

            return $this->respondSuccess($success, trans('message.guest successfully.'));
        }
    }


    public function activateRegister(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'country_code' => 'required_without:userId',
            'phone' => 'required_without:userId',
            'code' => 'required|min:3',
            'userId' => 'required_without:phone',
            'device_token' => 'min:2',
        ]);

        if ($validator->fails()) {
            return $this->respondError('Validation Error.', $validator->errors(), 400);
        }
        $country_code = $request->country_code;
        $phone = $request->phone;


        if ($request->country_code) {
            $user = User::where(function ($query) use ($country_code, $phone) {
                $query->where('country_code', $country_code)->where('phone', $phone);
            })->first();

        } elseif ($request->userId) {


            $user = User::Where('id', $request->userId)->first();

        }
        if ($user) {
            if ($user->active) {
                if ($request->device_token) {
                    $user->device_token = $request->device_token;
                    $user->save();
                }
                $success['token'] = $user->createToken('MyApp')->accessToken;
                $success['user'] = $user->only(['id', 'firstname', 'email', 'lastname', 'phone', 'country_code', 'code']);
                return $this->respondSuccess($success, trans('message.User already active.'));
            } else {
                $user->active = 1;
                $user->device_token = $request->device_token;
                $user->save();
                $success['token'] = $user->createToken('MyApp')->accessToken;
                $success['user'] = $user->only(['id', 'firstname', 'email', 'lastname', 'phone', 'country_code', 'code']);
                return $this->respondSuccess($success, trans('message.User activate successfully.'));
            }
        } else {
            return $this->respondError(trans('message.code not correct'), ['error' => trans('message.code not correct')], 401);
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
            return $this->respondError('Validation Error.', $validator->errors(), 400);
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
            return $this->respondError(trans('message.user not found'), ['error' => trans('message.user not found')], 404);
        }
    }

    public function forgetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'country_code' => 'required',
            'phone' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->respondError('Validation Error.', $validator->errors(), 400);
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
            return $this->respondError(trans('message.user not found'), ['error' => trans('message.user not found')], 404);
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
            return $this->respondError('Validation Error.', $validator->errors(), 400);
        }
        $country_code = $request->country_code;
        $phone = $request->phone;
        $user = User::where(function ($query) use ($country_code, $phone) {
            $query->where('country_code', $country_code)->where('phone', $phone);
        })->orWhere('id', $request->userId)->first();
        if ($user) {
            return $this->respondSuccess(json_decode('{}'), trans('message.code correct.'));
        } else {
            return $this->respondError(trans('message.code not correct'), ['error' => trans('message.code not correct')], 401);
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
            return $this->respondError('Validation Error.', $validator->errors(), 400);
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

            return $this->respondError(trans('message.user not found'), ['error' => trans('message.user not found')], 404);
        }
    }
}
