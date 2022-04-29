<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
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
        $products = Product::all();
        return view('admin.orders.create', compact('products'));
    }

    public function store(StoreProductRequest $request)
    {
        $input = $request->except('_token', 'size', 'rocks', 'images');
        $product = Product::create($input);
        $product->productImages()->delete();
        ProductImage::saveMany($product, $request->images);
        Size::saveMany($product, $request->size);
        Rock::saveMany($product, $request->rocks);
        return redirect(route('orders.index'))->with(['success' => 'Product saved successfully.']);
    }

    public function edit($id)
    {
        $data = Product::with('rocks', 'productImages', 'sizes')->find($id);
        $selects = Category::with('parent')->where('parent_id', '<>', Category::PARENT)->get();
        $collections = Collection::get();
        $sizes = $data->sizes;
        $rocks = $data->rocks;
        return view('admin.orders.edit', compact('data', 'selects', 'collections', 'sizes', 'rocks'));
    }

    public function update($id, UpdateProductRequest $request)
    {
        $input = $request->except('_token', 'size', 'rocks', 'images');
        $product = Product::find($id);
        $product->update($input);
        $product->productImages()->delete();
        ProductImage::saveMany($product, $request->images);
        Size::saveMany($product, $request->size);
        Rock::saveMany($product, $request->rocks);
        return redirect(route('orders.index'))->with(['success' => 'Product updated successfully.']);
    }

    public function destroy($id)
    {
        Product::find($id)->delete();
        return 'true';
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
}
