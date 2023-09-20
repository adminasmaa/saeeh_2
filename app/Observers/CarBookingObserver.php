<?php

namespace App\Observers;

use App\Models\CarBooking;
use App\Models\User;
use App\Models\Car;
use App\Models\BookingStatus;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

class CarBookingObserver
{
    /**
     * Handle the CarBooking "created" event.
     *
     * @param  \App\Models\CarBooking  $carBooking
     * @return void
     */
    public function created(CarBooking $carBooking)
    {
        $status=BookingStatus::find($carBooking->booking_status_id) ;
        $user = User::find($carBooking->user_id);
        $car=Car::find($carBooking->car_id);
        $title=trans('message.adv number').$carBooking->car_id."  (".$car->name_ar." )";
        $desription=trans('message.new booking')." ".$status->status_ar ;
        $not=Notification::updateOrCreate(['booking_id'=>$carBooking->id, 'status'=>$carBooking->booking_status_id],[
            'title'=>$title,
            'booking_id'=>$carBooking->id,
            'description'=>$desription,
            'type'=>'car',
            'status'=>$carBooking->booking_status_id,
            'user_id'=>$carBooking->user_id,

        ]);
        send_push_notification('car',$carBooking->id,$user->device_token,$title,$desription);
    }

    /**
     * Handle the CarBooking "updated" event.
     *
     * @param  \App\Models\CarBooking  $carBooking
     * @return void
     */
    public function updated(CarBooking $carBooking)
    {
        if(Auth::user()->roles->first()){
            $role =Auth::user()->roles->first()->display_name;
            }else{
                $role ='client';
            }
        $status=BookingStatus::find($carBooking->booking_status_id) ;
        $user =User::find($carBooking->user_id);
        $car=Car::find($carBooking->car_id);
        $title=trans('message.adv number').$carBooking->car_id."  (".$car->name_ar." )";
        if($role=='admin'){
            $desription=$status->admin_message;} else if( $role=='invest'){
                $desription=$status->investor_message;
            }else if($role=='client' && $aqarBooking->booking_status_id==4){
                $desription=trans('message.cancel your request');
            }
            else{
                $desription=$status->status_ar ;
            }
        $not=Notification::updateOrCreate(['booking_id'=>$carBooking->id, 'status'=>$carBooking->booking_status_id],[
            'title'=>$title,
            'booking_id'=>$carBooking->id,
            'description'=>$desription,
            'type'=>'car',
            'status'=>$carBooking->booking_status_id,
            'user_id'=>$carBooking->user_id,

        ]);
        send_push_notification('car',$carBooking->id,$user->device_token,$title,$desription);
    }

    /**
     * Handle the CarBooking "deleted" event.
     *
     * @param  \App\Models\CarBooking  $carBooking
     * @return void
     */
    public function deleted(CarBooking $carBooking)
    {
        //
    }

    /**
     * Handle the CarBooking "restored" event.
     *
     * @param  \App\Models\CarBooking  $carBooking
     * @return void
     */
    public function restored(CarBooking $carBooking)
    {
        //
    }

    /**
     * Handle the CarBooking "force deleted" event.
     *
     * @param  \App\Models\CarBooking  $carBooking
     * @return void
     */
    public function forceDeleted(CarBooking $carBooking)
    {
        //
    }
}
