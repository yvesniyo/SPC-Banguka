<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class IntouchSettings extends Settings
{
    public string
        $SMS_INTOUCH_SENDER,
        $SMS_INTOUCH_USERNAME,
        $SMS_INTOUCH_PASSWORD,
        $SMS_INTOUCH_CALL_BACK_URL;

    public static function group(): string
    {
        return 'intouch';
    }
}
