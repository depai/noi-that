<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends BaseController
{
    //
    /**
     * view detail product
     * @author lamnt
     * @param int product_ic
     */
    public function productDetail(Request $request)
    {
        return view('users.product.detail');
    }
}
