<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit($profile)
    {
        return view("profile");
    }

    public function update(Request $request)
    {
    }
}
