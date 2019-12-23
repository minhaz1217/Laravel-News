<?php

namespace App\Listeners;

use App\Events\NewCustomerRegisteredEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NotifyAdminSlackListener
{
    public function handle(NewCustomerRegisteredEvent $event)
    {
        //
        dump("Notify the admin about new customer");
    }
}
