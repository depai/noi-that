<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends BaseController
{
    public function index ()
    {
        return view('admin.settings.index');
    }

    public function store (Request $request)
    {
        if ($request->banner) {
            $request->banner->storeAs('themes/gavias_facdori/videos', 'videoplayback.mp4', 'public_uploads');
        }

        if ($request->logo) {
            $request->logo->storeAs('themes/gavias_facdori', 'logo.png', 'public_uploads');
        }

        if ($request->logo_white) {
            $request->logo_white->storeAs('themes/gavias_facdori', 'logo-white.png', 'public_uploads');
        }

        if ($request->logo_black) {
            $request->logo_black->storeAs('themes/gavias_facdori', 'logo-black.png', 'public_uploads');
        }

        return redirect()->back()->with(['success' => 'Setting saved successfully.']);
    }
}
