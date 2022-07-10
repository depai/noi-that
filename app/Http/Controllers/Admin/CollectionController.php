<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCollectionRequest;
use App\Http\Requests\UpdateCollectionRequest;
use App\Models\Collection;
use Illuminate\Http\Request;
use Flash;
use Yajra\DataTables\DataTables;

class CollectionController extends BaseController
{
    public function index()
    {
        return view('admin.collections.index');
    }

    public function create()
    {
        return view('admin.collections.create');
    }

    public function store(StoreCollectionRequest $request)
    {
        $input = $request->except('_token', 'image', 'delete_image');
        if ($request->image) {
            $imageName = uniqid() . '.' . $request->image->getClientOriginalExtension();
            $request->image->storeAs('public/categories/', $imageName);
            $input['image'] = $imageName;
        } elseif ($request->delete_image) {
            $input['image'] = '';
        }
        Collection::create($input);
        return redirect(route('collections.index'))->with(['success' => 'Category saved successfully.']);
    }

    public function edit($id)
    {
        $data = Collection::find($id);
        return view('admin.collections.edit', compact('data'));
    }

    public function update($id, UpdateCollectionRequest $request)
    {
        $input = $request->except('_token', 'image', 'delete_image');
        if ($request->image) {
            $imageName = uniqid() . '.' . $request->image->getClientOriginalExtension();
            $request->image->storeAs('public/collections/', $imageName);
            $input['image'] = $imageName;
        } elseif ($request->delete_image) {
            $input['image'] = '';
        }

        Collection::findOrFail($id)->update($input);
        return redirect(route('collections.index'))->with(['success' => 'Category updated successfully.']);
    }

    public function destroy($id)
    {
        Collection::find($id)->delete();
        return [1, 'Delete Record Success!'];
    }

    public function datatable()
    {
        $data = Collection::query();
        $dataReturn = Datatables::of($data)
            ->editColumn('image', function ($datum) {
                if ($datum->image) {
                    return '<img src=' . asset('storage/collections/' . $datum->image) . ' style="width:auto; height: 60px">';
                }
                return '';
            })
            ->addColumn('action', function ($datum) {
                return view('commons.admin.action', [
                    'editRoute' => route('collections.edit', $datum->id),
                    'tableRoute' => route('collections.datatable', $datum->id),
                    'deleteRoute' => route('collections.destroy', $datum->id)
                ]);
            })
            ->escapeColumns([]);

        return $dataReturn->make(true);
    }
}
