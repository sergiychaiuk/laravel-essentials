<?php

namespace App\Libraries;

class Notifications implements NotificationsInterface{
    public function send() {
        var_dump('notify');
    }
}
