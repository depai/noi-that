<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends BaseController
{
    //
    /**
     * view dashboard
     * @author lamnt
     * @param
     */
    public function index(Request $request)
    {
        return view('admin.dashboard');
    }
}
