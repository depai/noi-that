<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\Rock;
use App\Models\Size;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class OrderController extends BaseController
{
    public function index()
    {
        return view('admin.orders.index');
    }

    public function create()
    {
        $cart = session()->pull('cart') ?: [];
        $products = Product::all();
        return view('admin.orders.create', compact('products', 'cart'));
    }

    public function store(Request $request)
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
        return redirect(route('orders.index'))->with(['success' => 'Order saved successfully.']);
    }

    public function edit($id)
    {
        $data = Order::with('orderItems.rock', 'orderItems.product', 'orderItems.size')->find($id);
        $statuses = [
            Order::NEW => 'New',
            Order::DELIVERING => 'Delivering',
            Order::COMPLETED => 'Completed',
            Order::REJECT => 'Reject',
        ];
        foreach ($data->orderItems as $item) {
            $cart[] = [
                'id' => $item->product_id,
                'title' => $item->product->title,
                'rock_id' => $item->rock_id,
                'rock_title' => @$item->rock->name ?: '',
                'size_id' => $item->size_id,
                'size_title' => @$item->size->name ?: '',
                'quantity' => $item->quantity,
                'price' => 0
            ];
        }

        return view('admin.orders.edit', compact('data', 'cart', 'statuses'));
    }

    public function update($id, Request $request)
    {
        $input = $request->only('status', 'reason', 'note');
        $product = Order::find($id);
        $product->update($input);
        return redirect(route('orders.index'))->with(['success' => 'Order updated successfully.']);
    }

    public function destroy($id)
    {
        Product::find($id)->delete();
        return [1, 'Delete Record Success!'];
    }

    public function datatable()
    {
        $data = Order::with('orderItems');
        $dataReturn = DataTables::of($data)
            ->editColumn('status', function ($booking) {
                switch ($booking->status) {
                    case 1:
                        $text = '<span class="badge badge-warning">Delivering</span>';
                        break;
                    case 2:
                        $text = '<span class="badge badge-success">Completed</span>';
                        break;
                    case 3:
                        $text = '<span class="badge badge-secondary" title="' . $booking->reason . '">Reject</span>';
                        break;
                    default:
                        $text = '<span class="badge badge-primary">New</span>';
                }
                return $text;
            })
            ->editColumn('price', function ($datum) {
                return number_format($datum->price);
            })
            ->addColumn('action', function ($datum) {
                return view('commons.admin.action', [
                    'editRoute' => route('orders.edit', $datum->id),
                    'tableRoute' => route('orders.datatable', $datum->id),
                ]);
            })
            ->escapeColumns([]);

        return $dataReturn->make(true);
    }

    public function addItem (Request $request)
    {
        $rock = $size = '';
        $cart = session()->pull('cart') ?: [];
        $product = Product::find($request->product_id);
        $price = $product->price;
        if ($request->rock_id) {
            $rock = Rock::find($request->rock_id);
            $price += $rock->price;
        }

        if ($request->size_id) {
            $size = Size::find($request->size_id);
            $price += $size->price;
        }

        $cart[] = [
            'id' => $request->product_id,
            'title' => $product->title,
            'rock_id' => $request->rock_id,
            'rock_title' => @$rock->name ?: '',
            'size_id' => $request->size_id,
            'size_title' => @$size->name ?: '',
            'quantity' => $request->quantity,
            'price' => $price * $request->quantity
        ];
        session(['cart' => $cart]);
        $response = [
            'view' => view('admin.orders.cart', compact('cart'))->render()
        ];
        return response()->json($response);
    }

    public function removeItem (Request $request)
    {
        $cart = session()->pull('cart') ?: [];
        unset($cart[$request->id]);
        session(['cart' => $cart]);
        $response = [
            'view' => view('admin.orders.cart', compact('cart'))->render()
        ];
        return response()->json($response);
    }
}
