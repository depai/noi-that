<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|regex:/^([a-zA-Z0-9\+_\-]+)(\.[a-zA-Z0-9\+_\-]+)*@([a-zA-Z0-9\-]+\.)+[a-zA-Z]{2,6}$/',
            'password' => 'required|min:6|max:30',
        ]);

        if (Auth::guard('admins')->attempt([
            'email' => $request->email,
            'password' => $request->password], false)) {

            return redirect()->route('dashboard');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    /**
     * logout
     * @
     */
    public function logout(Request $request)
    {
        // Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }
}
