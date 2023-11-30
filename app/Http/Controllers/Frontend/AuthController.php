<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\Auth;
use Response;

use Alert;

use App\Http\Controllers\Controller;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Validator;

class AuthController extends Controller
{


    public function forget_password(Request $request)
    {
        return view('frontend.forgetpassword');


    }

    public function checkforgetwithphone(Request $request)
    {
        $this->validate($request, [
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        ]);

        $user = User::where('phone', $request->phone)->where('type', 'user')->first();
        if ($user) {

            $set = '123456789';
            $code = substr(str_shuffle($set), 0, 4);
            $msg = trans('message.for change password') . "\n";
            $msg = $msg . trans('message.your code ') . "\n" . $code;
            send_sms_code($msg, $request->phone, $user->country_code);
            $user->code = $code;
            $user->save();

            return redirect()->route('checkcode', [$user->id, 0]);
        } else {
            return redirect()->back()
                ->with('error', __('message.incorrect phone'));
        }

    }

    public function checkcode($id)
    {
        $user = User::find($id);
        return view('frontend.checkcode', compact('user'));

    }

    public function checkcodesucess(Request $request)
    {
        $code = $request->code1 . $request->code2 . $request->code3 . $request->code4;

        $user = User::where('id', $request->id)->where('code', $code)->first();


        if ($user) {

            return redirect()->route('changepassword', $user->id);
        } else {
            return redirect()->back()
                ->with('error', __('message.code not correct'));
        }

    }

    public function changepassword($id)
    {

        return view('frontend.changepassword', compact('id'));

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

    public function updatenewpassword(Request $request)
    {
//        return $request;

        $this->validate($request, [
            'password' => 'required|min:6',
            'new_password' => 'same:password|min:6',
        ]);

        $user = User::where('id', $request->id)->first();
        if ($user) {
            $password = bcrypt($request->password);
            $user->password = $password;
            $user->save();

            Alert::success('Success', __('message.password reset successfully.'));

            return redirect()->route('sitelogin');
        } else {
            return redirect()->back()
                ->with('error', __('message.wrong credientials'));
        }

    }

    public function logout()
    {


        Auth::logout();

        return redirect(route('Home'));
    }

    public function updateprofile(Request $request, $id)
    {

        $user = User::find($id);

        return view('frontend.profile', compact('user'));

    }

    public function updateprofileData(Request $request, $id)
    {

        $validation = Validator::make($request->all(), [
            'email' => ['required', Rule::unique('users')->ignore($id),],
            'phone' => ['required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10', Rule::unique('users')->ignore($id),],
            'password' => 'nullable|confirmed|min:6',
            'name' => 'required',
        ]);

        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()], 422);
        }

        $request_data = $request->except(['password', 'password_confirmation', '_token']);

        $request_data['active'] = 1;
        $request_data['account_type'] = 'User';
        if (!empty($request->password)) {

            $request_data['password'] = bcrypt($request->password);

        }
        $request_data['username'] = $request->name;
        $request_data['firstname'] = $request->name;

        $user = User::find($id);
        $user->update($request_data);


        return response()->json(['status' => true, 'content' => 'success', 'data' => $user]);

        return view('frontend.profile');

    }


    public function login()
    {

        return view('frontend.login');


    }

    public function register()
    {

        return view('frontend.register');


    }

    public function createaccount(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'email' => 'required|email|string|unique:users',
            'phone' => 'required|unique:users|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'password' => 'required|confirmed|min:6',
            'name' => 'required',
        ]);

        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()], 422);
        }

        $request_data = $request->except(['password', 'password_confirmation', '_token']);

        $request_data['active'] = 1;
        $request_data['account_type'] = 'User';

        $request_data['password'] = bcrypt($request->password);
        $request_data['username'] = $request->name;
        $request_data['firstname'] = $request->name;

        $user = User::create($request_data);

        Auth::login($user);

        return response()->json(['status' => true, 'content' => 'success', 'data' => $user]);

    }


    public function checklogin(Request $request)
    {

        $validation = Validator::make($request->all(), [
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',

            'password' => 'required|min:6',
        ]);

        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()], 422);
        }
        if (auth()->attempt(['phone' => $request->phone, 'password' => $request->password])) {
            $user = Auth::user();
            Auth::login($user);
            return response()->json(['status' => true, 'content' => 'success', 'data' => $user]);

        } else {


            return response()->json(['status' => true, 'content' => 'error']);
        }

    }


}
