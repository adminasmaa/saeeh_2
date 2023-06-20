<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Http\Request;


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


        $request->validate([
            'name' => 'required',
            'phone' => 'required|unique:contacts',
        ]);

        Contact::create($request->all());


        return back();


    }


}
