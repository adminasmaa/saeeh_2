<?php

namespace App\Observers;
use App\Models\User;
use App\Models\AqarBooking;
use App\Models\BookingStatus;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;



class AqarBookingObserver
{
    /**
     * Handle the AqarBooking "created" event.
     *
     * @param  \App\Models\AqarBooking  $aqarBooking
     * @return void
     */
    public function created(AqarBooking $aqarBooking)
    {
         $status=BookingStatus::find($aqarBooking->booking_status_id) ;
        $user = User::find($aqarBooking->user_id);
        $title="الحجز رقم ".$aqarBooking->id;
        $desription="حجز جديد";
        $not=Notification::create([
            'title'=>$title,
            'booking_id'=>$aqarBooking->id,
            'description'=>$desription,
            'type'=>'aqar',
            'status'=>$aqarBooking->booking_status_id,
            'user_id'=>$aqarBooking->user_id,

        ]);
        send_push_notification($aqarBooking->id,$user->device_token,$title,$desription);
    }

    /**
     * Handle the AqarBooking "updated" event.
     *
     * @param  \App\Models\AqarBooking  $aqarBooking
     * @return void
     */
    public function updated(AqarBooking $aqarBooking)
    {
        $status=BookingStatus::find($aqarBooking->booking_status_id) ;
        $user = User::find($aqarBooking->user_id);
        $title="الحجز رقم ".$aqarBooking->id;
        $desription=$status->status_ar;
        $not=Notification::create([
            'title'=>$title,
            'booking_id'=>$aqarBooking->id,
            'description'=>$desription,
            'type'=>'aqar',
            'status'=>$aqarBooking->booking_status_id,
            'user_id'=>$aqarBooking->user_id,

        ]);
        send_push_notification($aqarBooking->id,$user->device_token,$title,$desription);

    }

    /**
     * Handle the AqarBooking "deleted" event.
     *
     * @param  \App\Models\AqarBooking  $aqarBooking
     * @return void
     */
    public function deleted(AqarBooking $aqarBooking)
    {
        //
    }

    /**
     * Handle the AqarBooking "restored" event.
     *
     * @param  \App\Models\AqarBooking  $aqarBooking
     * @return void
     */
    public function restored(AqarBooking $aqarBooking)
    {
        //
    }

    /**
     * Handle the AqarBooking "force deleted" event.
     *
     * @param  \App\Models\AqarBooking  $aqarBooking
     * @return void
     */
    public function forceDeleted(AqarBooking $aqarBooking)
    {
        //
    }
}
