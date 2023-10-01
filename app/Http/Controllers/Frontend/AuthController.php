<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\Auth;
use Response;


use App\Http\Controllers\Controller;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Validator;

class AuthController extends Controller
{


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
            'phone' => ['required', Rule::unique('users')->ignore($id),],
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
            'phone' => 'required|string|unique:users',
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
            'phone' => 'required',

            'password' => 'required',
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
