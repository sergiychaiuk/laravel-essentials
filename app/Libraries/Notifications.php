<?php

namespace App\Libraries;

use Illuminate\Support\Facades\Mail;
use App\Mail\Reservation;

class Notifications implements NotificationsInterface{
    public function send() {
        Mail::to('sample@test.com')->send(new Reservation('Alex Winger'));
    }
}
