<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends BaseController
{
    //
    /**
     * view detail product
     * @author lamnt
     * @param int product_ic
     */
    public function productDetail(Request $request, $slug)
    {
        $product = Product::with('collection', 'productImages', 'sizes', 'rocks')->firstWhere('slug', $slug);
        $relatedProducts = Product::with('productImages', 'collection')->where('category_id', $product->category_id)->orWhere('collection_id', $product->collection_id)->get()->except($product->id)->take(4);
        return view('users.product.detail', compact('product', 'relatedProducts'));
    }
}
