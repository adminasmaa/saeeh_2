<?php

namespace App\Observers;

use App\Models\Deposit;

class DepositObserver
{
    /**
     * Handle the Deposit "created" event.
     *
     * @param  \App\Models\Deposit  $deposit
     * @return void
     */
    public function created(Deposit $deposit)
    {
        //
    }

    /**
     * Handle the Deposit "updated" event.
     *
     * @param  \App\Models\Deposit  $deposit
     * @return void
     */
    public function updated(Deposit $deposit)
    {
        //
    }

    /**
     * Handle the Deposit "deleted" event.
     *
     * @param  \App\Models\Deposit  $deposit
     * @return void
     */
    public function deleted(Deposit $deposit)
    {
        //
    }

    /**
     * Handle the Deposit "restored" event.
     *
     * @param  \App\Models\Deposit  $deposit
     * @return void
     */
    public function restored(Deposit $deposit)
    {
        //
    }

    /**
     * Handle the Deposit "force deleted" event.
     *
     * @param  \App\Models\Deposit  $deposit
     * @return void
     */
    public function forceDeleted(Deposit $deposit)
    {
        //
    }
}
