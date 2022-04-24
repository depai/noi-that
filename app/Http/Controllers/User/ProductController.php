<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\Rock;
use App\Models\Size;
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
        $cart = session('cart') ?: [];
        $product = Product::with('collection', 'productImages', 'sizes', 'rocks')->firstWhere('slug', $slug);
        $relatedProducts = Product::with('productImages', 'collection')->where('category_id', $product->category_id)->orWhere('collection_id', $product->collection_id)->get()->except($product->id)->take(4);
        return view('users.product.detail', compact('product', 'relatedProducts', 'cart'));
    }

    public function addToCart (Request $request)
    {
        $cart = session()->pull('cart') ?: [];
        $price = Product::find($request->product_id)->price;
        if ($request->rock_id) {
            $price += Rock::find($request->rock_id)->price;
        }

        if ($request->size_id) {
            $price += Size::find($request->size_id)->price;
        }

        $cart[$request->product_id] = [
            'id' => $request->product_id,
            'title' => $request->product_title,
            'rock_id' => $request->rock_id,
            'size_id' => $request->size_id,
            'quantity' => $request->quantity,
            'price' => $price * $request->quantity
        ];
        session(['cart' => $cart]);
        return redirect()->back();
    }

    public function removeToCart (Request $request)
    {
        $cart = session()->pull('cart') ?: [];
        unset($cart[$request->id]);
        session(['cart' => $cart]);
        return redirect()->back();
    }

    public function checkout (Request $request)
    {
        $cart = session()->pull('cart') ?: [];
        $items = [];
        $price = 0;
        if (!empty($cart)) {
            foreach ($cart as $item) {
                $items[] = [
                    'product_id' => $item['id'],
                    'rock_id' => $item['rock_id'],
                    'size_id' => $item['size_id'],
                    'quantity' => $item['quantity'],
                ];
                $price += $item['price'];
            }
        }
        $input = $request->only('full_name', 'phone', 'email', 'address', 'note');
        $input['price'] = $price;
        $order = Order::create($input);
        $order->orderItems()->createMany($items);
        session(['thanks' => true]);
        return redirect()->back();
    }
}
