<?php

namespace App\Http\Controllers\Frontend;
use Response;


use App\Http\Controllers\Controller;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login()
    {
       
        return view('frontend.login');


    }
    
    public function register()
    {
       
        return view('frontend.register');


    }

    public function createaccount( Request $request){

       $request->validate([

            'email' => 'required|email|string|unique:users',
            'phone' => 'required|string|unique:users',

            'password' => 'required|confirmed',
            'name' => 'required',
        ],
            [
                'password.regex' => __('site.password_regex'),
            ]
        );


               $request_data = $request->except(['password','password_confirmation','_token']);

             $request_data['active'] = 1;
        $request_data['account_type'] = 'User';

        $request_data['password'] = bcrypt($request->password);
        $request_data['username'] = $request->name;
        $request_data['firstname'] = $request->name;

               $user=User::create($request_data);
               Auth::login;


    return back();
    }


    public function checklogin(Request $request){


       $request->validate([

            'phone' => 'required',

            'password' => 'required',
        ],
            [
            ]
        );

         if (auth()->attempt(['phone' => $request->phone, 'password' => $request->password])) {
            $user = Auth::user();

            return redirect(route('Home'));
         }else {


         return back()->with('error in crediantal phone or password');
            }

    }




}
