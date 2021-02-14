<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class MailSettings extends Settings
{
    public string
        $MAIL_DRIVER,
        $MAIL_HOST,
        $MAIL_PORT,
        $MAIL_USERNAME,
        $MAIL_PASSWORD,
        $MAIL_ENCRYPTION;

    public static function group(): string
    {
        return 'mail';
    }
}
