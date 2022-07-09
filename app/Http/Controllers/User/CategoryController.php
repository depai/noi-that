<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends BaseController
{
    //
    public function viewCategory(Category $category, Request $request, Product $product)
    {
        $detailCategory = $category->getCategoryBySlug($request->slug);
        if(!empty($detailCategory->parent_id)){
            // list product theo category có phân trang
            $listProduct = $detailCategory->products()->paginate(20);
            return view('users.category.category_children')->with([
                'detailCategory' => $detailCategory,
                'listProduct' => $listProduct
            ]);
        }
        return view('users.category.index')->with([
            'detailCategory' => $detailCategory
        ]);
    }

    public function viewCollection(Collection $collection, Request $request, Category $category)
    {
        $detailCollection = $collection->getDetailBySlug($request->slug);
        $listProduct = $category->getByCollectionId($detailCollection->id);
        return view('users.collection_home.collection_index')->with([
            'detailCollection'=>$detailCollection,
            'listProduct'=>$listProduct
        ]);
    }

    public function indexCollection(Request $request, Collection $collection)
    {
        $list = $collection->getCollection();
        $viewDetailProduct = 1;
        return view('users.collection_home.collection_list', compact('list','viewDetailProduct'));
    }
}
