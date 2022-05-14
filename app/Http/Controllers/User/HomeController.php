<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Collection;
use Illuminate\Http\Request;

class HomeController extends BaseController
{
    //
    /**
     * view home page
     *
     */
    public function indexHome(Request $request, Collection $collection)
    {
        //get collection and product in collection
        $getCollection = $collection->getCollection()->take(3);

        return view('users.homepage', [
            'style' => 1,
            'collections'=>$getCollection
        ]);
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
