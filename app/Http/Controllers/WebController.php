<?php

namespace App\Http\Controllers;

use App\Settings\GeneralSettings;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view("web.index",);
    }

    public function aboutUs()
    {
        return view("web.about-us");
    }

    public function contactUs()
    {
        return view("web.contact-us");
    }

    public function privacyPolicy()
    {
        return view("web.privacy-policy");
    }
}
