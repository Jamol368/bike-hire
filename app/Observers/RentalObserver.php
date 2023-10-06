<?php

namespace App\Observers;

use App\Models\Rental;

class RentalObserver
{
    /**
     * Handle events after all transactions are committed.
     *
     * @var bool
     */
    public $afterCommit = true;

    /**
     * Handle the Rental "created" event.
     *
     * @param  \App\Models\Rental  $rental
     * @return void
     */
    public function created(Rental $rental)
    {
        //
    }

    /**
     * Handle the Rental "updated" event.
     *
     * @param  \App\Models\Rental  $rental
     * @return void
     */
    public function updated(Rental $rental)
    {
        //
    }

    /**
     * Handle the Rental "deleted" event.
     *
     * @param  \App\Models\Rental  $rental
     * @return void
     */
    public function deleted(Rental $rental)
    {
        //
    }

    /**
     * Handle the Rental "restored" event.
     *
     * @param  \App\Models\Rental  $rental
     * @return void
     */
    public function restored(Rental $rental)
    {
        //
    }

    /**
     * Handle the Rental "force deleted" event.
     *
     * @param  \App\Models\Rental  $rental
     * @return void
     */
    public function forceDeleted(Rental $rental)
    {
        //
    }
}
