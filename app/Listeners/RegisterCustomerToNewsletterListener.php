<?php

namespace App\Listeners;

use App\Events\NewCustomerRegisteredEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class RegisterCustomerToNewsletterListener
{
    public function handle(NewCustomerRegisteredEvent $event)
    {
        dump("Register the custoemr to the newsletter.");
    }
}
