<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Collection;
use App\Models\Order;
use App\Models\Product;
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
        $countProduct = Product::count();
        $countOrder = Order::count();
        $countCollection = Collection::count();
        return view('admin.dashboard')->with([
            'countProduct'=>$countProduct,
            'countOrder'=>$countOrder,
            'countCollection'=>$countCollection,
        ]);
    }
}
