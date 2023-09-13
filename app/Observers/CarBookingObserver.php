<?php

namespace App\Observers;

use App\Models\CarBooking;
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
        $user = Auth::user();
        $title="الحجز رقم ".$carBooking->id;
        $desription="حجز جديد";
        $not=Notification::create([
            'title'=>$title,
            'booking_id'=>$carBooking->id,
            'description'=>$desription,
            'type'=>'car',
            'user_id'=>$user->id,

        ]);
        send_push_notification($carBooking->id,$user->token,$title,$desription);
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
        $user = Auth::user();
        $title="الحجز رقم ".$carBooking->id;
        $desription=$status->status_ar;
        $not=Notification::create([
            'title'=>$title,
            'booking_id'=>$carBooking->id,
            'description'=>$desription,
            'type'=>'car',
            'user_id'=>$user->id,

        ]);
        send_push_notification($carBooking->id,$user->token,$title,$desription);
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
