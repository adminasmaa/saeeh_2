<?php

namespace App\Observers;

use App\Models\Commission;

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
        if($commission->status==1 &&$commission->waseal_photo != NULL){

           
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
