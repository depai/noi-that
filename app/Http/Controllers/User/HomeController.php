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
        return view('users.homepage');
    }
}
