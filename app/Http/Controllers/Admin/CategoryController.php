<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Flash;
use Yajra\DataTables\DataTables;

class CategoryController extends BaseController
{
    public function index()
    {
        return view('admin.categories.index');
    }

    public function create()
    {
        $selects = Category::where('parent_id', Category::PARENT)->get();
        return view('admin.categories.create', compact('selects'));
    }

    public function store(StoreCategoryRequest $request)
    {
        $input = $request->except('_token', 'image', 'delete_image');
        if ($request->image) {
            $imageName = uniqid() . '.' . $request->image->getClientOriginalExtension();
            $request->image->storeAs('public/categories/', $imageName);
            $input['image'] = $imageName;
        } elseif ($request->delete_image) {
            $input['image'] = '';
        }
        Category::create($input);
        return redirect(route('categories.index'))->with(['success' => 'Category saved successfully.']);
    }

    public function edit($id)
    {
        $data = Category::find($id);
        $selects = Category::where('parent_id', Category::PARENT)->get();
        return view('admin.categories.edit', compact('data', 'selects'));
    }

    public function update($id, UpdateCategoryRequest $request)
    {
        $input = $request->except('_token', 'image', 'delete_image');
        if ($request->image) {
            $imageName = uniqid() . '.' . $request->image->getClientOriginalExtension();
            $request->image->storeAs('public/categories/', $imageName);
            $input['image'] = $imageName;
        } elseif ($request->delete_image) {
            $input['image'] = '';
        }

        Category::findOrFail($id)->update($input);
        return redirect(route('categories.index'))->with(['success' => 'Category updated successfully.']);
    }

    public function destroy($id)
    {
        Category::find($id)->delete();
        return 'true';
    }

    public function datatable()
    {
        $data = Category::with('parent');
        $dataReturn = Datatables::of($data)
            ->editColumn('image', function ($datum) {
                if ($datum->image) {
                    return '<img src=' . asset('storage/categories/' . $datum->image) . ' style="width:auto; height: 60px">';
                }
                return '';
            })
            ->addColumn('parent', function ($datum) {
                if ($datum->parent_id) {
                    return !empty($datum->parent) ? $datum->parent->title : '-';
                }
                return '';
            })
            ->addColumn('action', function ($datum) {
                return view('commons.admin.action', [
                    'editRoute' => route('categories.edit', $datum->id),
                    'tableRoute' => route('categories.datatable', $datum->id),
                    'deleteRoute' => route('categories.destroy', $datum->id)
                ]);
            })
            ->escapeColumns([]);

        return $dataReturn->make(true);
    }
}
