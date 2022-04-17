<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadImageController extends Controller
{
    public function store(Request $request)
    {
        $imageName = uniqid() . '.' . $request->file->getClientOriginalExtension();
        $request->file->storeAs('public/', $imageName);
        return $imageName;
        $data = [
            'imageName' => $imageName,
        ];
        return response()->json($data);
    }
}
