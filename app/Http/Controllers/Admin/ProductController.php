<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Rock;
use App\Models\Size;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.products.index');
    }
  
    public function create()
    {
        $selects = Category::with('parent')->where('parent_id', '<>', Category::PARENT)->get();
        $collections = Collection::get();
        return view('admin.products.create', compact('selects', 'collections', 'rocks'));
    }

    public function store(StoreProductRequest $request)
    {
        $input = $request->except('_token', 'size', 'rocks', 'images');
        $product = Product::create($input);
        $product->productImages()->delete();
        ProductImage::saveMany($product, $request->images);
        Size::saveMany($product, $request->size);
        Rock::saveMany($product, $request->rocks);
        return redirect(route('products.index'))->with(['success' => 'Product saved successfully.']);
    }

    public function edit($id)
    {
        $data = Product::with('rocks', 'productImages', 'sizes')->find($id);
        $selects = Category::with('parent')->where('parent_id', '<>', Category::PARENT)->get();
        $collections = Collection::get();
        $sizes = $data->sizes;
        $rocks = $data->rocks;
        return view('admin.products.edit', compact('data', 'selects', 'collections', 'sizes', 'rocks'));
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
        return redirect(route('products.index'))->with(['success' => 'Product updated successfully.']);
    }

    public function destroy($id)
    {
        Product::find($id)->delete();
        return 'true';
    }

    public function datatable()
    {
        $data = Product::with('category', 'productImages', 'rocks', 'sizes');
        $dataReturn = DataTables::of($data)
            ->addColumn('image', function ($datum) {
                return '<img src=' . asset('storage/' . $datum->productImages->first()->name) . ' style="width:auto; height: 60px">';
            })
            ->addColumn('category', function ($datum) {
                return $datum->category->title;
            })
            ->addColumn('collection', function ($datum) {
                return $datum->collection->title;
            })
            ->addColumn('rock', function ($datum) {
                return implode(', ', $datum->rocks->pluck('name')->toArray());
            })
            ->addColumn('size', function ($datum) {
                return implode(', ', $datum->sizes->pluck('name')->toArray());
            })
            ->addColumn('action', function ($datum) {
                return view('commons.admin.action', [
                    'editRoute' => route('products.edit', $datum->id),
                    'tableRoute' => route('products.datatable', $datum->id),
                    'deleteRoute' => route('products.destroy', $datum->id)
                ]);
            })
            ->escapeColumns([]);

        return $dataReturn->make(true);
    }
}
