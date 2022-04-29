<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    protected $orderModel;
    public function __construct()
    {
        $countNewOrder = Order::where('status', Order::NEW)->count();
        View::share('countNewOrder', $countNewOrder);
    }
}
