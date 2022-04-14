<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;
use App\Models\Rock;
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
        $selects = Category::where('parent_id', '<>', 0)->get();
        $collections = Collection::get();
        $rocks = Rock::all();
        return view('admin.products.create', compact('selects', 'collections', 'rocks'));
    }

    public function store(Request $request)
    {
        $input = $request->except('_token', 'image', 'delete_image');
        if ($request->image) {
            $imageName = uniqid() . $request->image->getClientOriginalExtension();
            $request->image->storeAs('public/products/', $imageName);
            $input['image'] = $imageName;
        } elseif ($request->delete_image) {
            $input['image'] = '';
        }
        Product::create($input);
        return redirect(route('products.index'))->with(['success' => 'Product saved successfully.']);
    }

    public function edit($id)
    {
        $data = Product::find($id);
        $selects = Category::where('parent_id', '<>', Category::PARENT)->get();
        $collections = Collection::get();
        return view('admin.products.edit', compact('data', 'selects', 'collections'));
    }

    public function update($id, Request $request)
    {
        $input = $request->except('_token', 'image', 'delete_image');
        if ($request->image) {
            $imageName = uniqid() . $request->image->getClientOriginalExtension();
            $request->image->storeAs('public/products/', $imageName);
            $input['image'] = $imageName;
        } elseif ($request->delete_image) {
            $input['image'] = '';
        }

        Product::findOrFail($id)->update($input);
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
                return '<img src=' . asset('storage/products/' . $datum->$datum->productImages->first()->name) . ' style="width:auto; height: 60px">';
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
