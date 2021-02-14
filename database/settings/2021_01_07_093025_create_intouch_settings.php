<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateIntouchSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add("intouch.SMS_INTOUCH_SENDER", "spc");
        $this->migrator->add("intouch.SMS_INTOUCH_USERNAME", "spc");
        $this->migrator->add("intouch.SMS_INTOUCH_PASSWORD", "spc123");
        $this->migrator->add("intouch.SMS_INTOUCH_CALL_BACK_URL", "/api/intouch/sms/webhook/sms-delivery-status");
    }
}
