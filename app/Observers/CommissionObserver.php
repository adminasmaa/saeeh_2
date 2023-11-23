<?php

namespace App\Observers;

use App\Models\Commission;
use App\Models\Invoice;
use Illuminate\Support\Facades\Auth;

class CommissionObserver
{
    /**
     * Handle the Commission "created" event.
     *
     * @param  \App\Models\Commission  $commission
     * @return void
     */
    public function created(Commission $commission)
    {
        return $commission;
        //
    }

    /**
     * Handle the Commission "updated" event.
     *
     * @param  \App\Models\Commission  $commission
     * @return void
     */
    public function updated(Commission $commission)
    {
        if($commission->status==1 && $commission->waseal_photo != NULL){

            Invoice::create([
                'balance'=>$commission->price,
                'amount'=>$commission->price,
                'description'=>trans('site.commission booking').$commission->booking_id,
                'type'=>'income',
                'user_id'=>Auth::id(),
    
            ]);


        }
    }

    /**
     * Handle the Commission "deleted" event.
     *
     * @param  \App\Models\Commission  $commission
     * @return void
     */
    public function deleted(Commission $commission)
    {
        //
    }

    /**
     * Handle the Commission "restored" event.
     *
     * @param  \App\Models\Commission  $commission
     * @return void
     */
    public function restored(Commission $commission)
    {
        //
    }

    /**
     * Handle the Commission "force deleted" event.
     *
     * @param  \App\Models\Commission  $commission
     * @return void
     */
    public function forceDeleted(Commission $commission)
    {
        //
    }
}
