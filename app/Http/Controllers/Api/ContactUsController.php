<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class ContactUsController extends Controller
{

    public function contactus(Request $request)
    {

        $rule = [
            'name' => 'required',
            'phone' => 'required|min:9|unique:contacts',
            'message' => 'required',


        ];
        $customMessages = [
            'required' => __('validation.attributes.required'),
        ];

        $validator = validator()->make($request->all(), $rule, $customMessages);

        if ($validator->fails()) {

            return $this->respondError('Validation Error.', $validator->errors(), 400);

        } else {

            $request_data = $request->all();
            $request_data['user_id'] = Auth::id();

            $contact = Contact::create($request_data);

            return $this->respondSuccess($contact, __('site.added_successfully'));


        }


    }


}