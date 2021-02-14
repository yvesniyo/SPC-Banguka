<?php

namespace App\Http\Controllers;

use App\Settings\AllSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Laracasts\Flash\Flash;
use Jackiedo\DotenvEditor\DotenvEditor;

class SettingsController extends Controller
{
    public function index(AllSettings $settings)
    {
        $settings = $settings->getAll();
        return view("settings", compact('settings'));
    }


    public function update(
        Request $request,
        $settings,
        AllSettings $nobleSettings,
        DotenvEditor $dotenvEditor
    ) {
        $datas = $request->except(["_method", "_token"]);

        // /** @var \App\Settings\Noble\MailSettings */
        $oldSettings = $nobleSettings->getAll()[$settings];


        if ($oldSettings != null) {
            foreach ($datas as $key => $value) {
                $isBool = is_bool($oldSettings->{$key});
                if (is_null($value)) {
                    $value = "";
                }
                if ($isBool && $value == "on") {
                    $value = true;
                }
                $oldSettings->{$key} = $value;

                //check if the key exists in .env file and if it does update it
                $keyExistsInEnv = $dotenvEditor->keyExists($key);
                if ($keyExistsInEnv) {
                    if ($isBool) {
                        $dotenvEditor->setKey($key,  $oldSettings->{$key} ? "true" : "false");
                    } else {
                        $dotenvEditor->setKey($key,  $oldSettings->{$key});
                    }
                } else {
                    if ($key == "site_name") {
                        $dotenvEditor->setKey("APP_NAME",  $oldSettings->{$key});
                    }
                }
            }
        }

        if ($oldSettings->save()) {
            $dotenvEditor->save();
            Artisan::call('config:cache');
        }
        Flash::success(strtoupper($settings) . ' Settings saved successfully.');
        return redirect()->back();
        return $oldSettings->toArray();
    }
}
