<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateGeneralSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.site_name', config("app.name"));
        $this->migrator->add('general.company_name', config("app.company_name", ""));
        $this->migrator->add('general.company_location', config("app.company_location", ""));
        $this->migrator->add('general.company_phone', config("app.company_phone", ""));
        $this->migrator->add('general.company_email', config("app.company_email", ""));
    }
}
