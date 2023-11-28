<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Validator;

class ContactController extends Controller
{

    public function contacts()
    {
        $setting = Setting::first();
//        return $setting;
        return view('frontend.contacts', compact('setting'));


    }

    public function addContacts(Request $request)
    {

        $validation = Validator::make($request->all(), [
            'name' => 'required|string',
            'phone' => 'required|unique:contacts',
            'message' => 'required|string',

        ]);

        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()], 422);
        }

        $request_data = $request->except('_token');
        $request_data['user_id'] = Auth::id() ?? '';

        $data = Contact::create($request_data);

        return response()->json(['status' => true, 'content' => 'success', 'data' => $data]);


    }


}
