<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Notification;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\NotificationResource;
use Validator;

class ContactUsController extends Controller
{


    public function contacts()
    {

        $settings = Setting::first()->only(['id', 'email', 'website_address', 'phone_one','phone_two','website_link','twitter','facebook','instagram','youtube','snapchat']);

        return $this->respondSuccess($settings, __('message.data retrieved successfully.'));

    }


    public function termandcondition()
    {

        $settings = Setting::first()->only(['id', 'terms_conditions']);

        return $this->respondSuccess($settings, __('message.data retrieved successfully.'));

    }



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


    public function notification()
    {
       

        $notifications = Notification::where('user_id',Auth::id())->order_by('created_at','desc')->paginate(20);
        $notifications = NotificationResource::collection($notifications)->response()->getData();
        return $this->respondSuccessPaginate($notifications, __('message.data retrieved successfully.'));
        

    }


}
