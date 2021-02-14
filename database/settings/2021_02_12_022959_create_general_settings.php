<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateGeneralSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.site_name', config("app.name"));
        $this->migrator->add('general.company_name', "Banguka");
        $this->migrator->add('general.company_location', "Kigali, Rwanda");
        $this->migrator->add('general.company_phone', "+250783588642");
        $this->migrator->add('general.company_email', "niyobuhungiro.yves@gmail.com");
    }
}
