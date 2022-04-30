<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends BaseController
{
    //
    /**
     * view home page
     *
     */
    public function indexHome(Request $request)
    {
        return view('users.homepage', ['style' => 1]);
    }

    public function viewAboutUs()
    {
        return view('users.about-us');
    }

    public function viewContactUs()
    {
        return view('users.contacts');
    }
}
