<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{

    public string $site_name;

    public string $company_name;
    public string $company_location;
    public string $company_phone;
    public string $company_email;

    public static function group(): string
    {
        return 'general';
    }
}
