<?php

namespace App\Observers;

use App\Models\CarBooking;
use App\Models\User;
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
        $title="الحجز رقم ".$carBooking->id;
        $desription="حجز جديد";
        $not=Notification::create([
            'title'=>$title,
            'booking_id'=>$carBooking->id,
            'description'=>$desription,
            'type'=>'car',
            'status'=>$carBooking->booking_status_id,
            'user_id'=>$carBooking->user_id,

        ]);
        send_push_notification($carBooking->id,$user->device_token,$title,$desription);
    }

    /**
     * Handle the CarBooking "updated" event.
     *
     * @param  \App\Models\CarBooking  $carBooking
     * @return void
     */
    public function updated(CarBooking $carBooking)
    {
        $status=BookingStatus::find($carBooking->booking_status_id) ;
        $user =User::find($carBooking->user_id);
        $title="الحجز رقم ".$carBooking->id;
        $desription=$status->status_ar;
        $not=Notification::create([
            'title'=>$title,
            'booking_id'=>$carBooking->id,
            'description'=>$desription,
            'type'=>'car',
            'status'=>$carBooking->booking_status_id,
            'user_id'=>$carBooking->user_id,

        ]);
        send_push_notification($carBooking->id,$user->device_token,$title,$desription);
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
