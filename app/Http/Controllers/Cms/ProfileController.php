<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;

class ProfileController extends Controller
{

    public function edit()
    {
        return view('cms.profile.edit');
    }
}
