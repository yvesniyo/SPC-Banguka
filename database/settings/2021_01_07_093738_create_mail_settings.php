<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateMailSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add("mail.MAIL_DRIVER", "smtp");
        $this->migrator->add("mail.MAIL_HOST", "smtp.mailtrap.io");
        $this->migrator->add("mail.MAIL_PORT", "2525");
        $this->migrator->add("mail.MAIL_USERNAME", "");
        $this->migrator->add("mail.MAIL_PASSWORD", "");
        $this->migrator->add("mail.MAIL_ENCRYPTION", "");
    }
}
