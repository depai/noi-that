<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
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
}
