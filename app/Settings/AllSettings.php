<?php

namespace App\Settings;

use App\Support\AbstractEntityCustomModel;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Collection;

class AllSettings extends AbstractEntityCustomModel implements Arrayable
{
    private GeneralSettings $generalSettings;
    private IntouchSettings $intouchSettings;
    private MailSettings $mailSettings;


    public function __construct(
        GeneralSettings $generalSettings,
        IntouchSettings $intouchSettings,
        MailSettings $mailSettings
    ) {
        $this->generalSettings = $generalSettings;
        $this->intouchSettings = $intouchSettings;
        $this->mailSettings = $mailSettings;
    }
    /**
     * Save all settings
     */

    public function save()
    {
        $this->generalSettings->save();
        $this->intouchSettings->save();
        $this->mailSettings->save();
        return true;
    }

    /**
     * Get all setting in array
     * @return \Illuminate\Support\Collection
     */
    public function getAll(): Collection
    {

        return collect([
            $this->generalSettings->group() => $this->generalSettings,
            $this->intouchSettings->group() => $this->intouchSettings,
            $this->mailSettings->group() => $this->mailSettings,
        ]);
    }

    /**
     * Get the value of generalSettings
     */
    public function getGeneralSettings()
    {
        return $this->generalSettings;
    }

    /**
     * Set the value of generalSettings
     *
     * @return  self
     */
    public function setGeneralSettings($generalSettings)
    {
        $this->generalSettings = $generalSettings;

        return $this;
    }

    /**
     * Get the value of intouchSettings
     */
    public function getIntouchSettings()
    {
        return $this->intouchSettings;
    }

    /**
     * Set the value of intouchSettings
     *
     * @return  self
     */
    public function setIntouchSettings($intouchSettings)
    {
        $this->intouchSettings = $intouchSettings;

        return $this;
    }

    /**
     * Get the value of mailSettings
     */
    public function getMailSettings()
    {
        return $this->mailSettings;
    }

    /**
     * Set the value of mailSettings
     *
     * @return  self
     */
    public function setMailSettings($mailSettings)
    {
        $this->mailSettings = $mailSettings;

        return $this;
    }
}
