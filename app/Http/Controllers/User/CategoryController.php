<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends BaseController
{
    //
    public function viewCategory(Category $category, Request $request)
    {
        $detailCategory = $category->getCategoryBySlug($request->slug);
        return view('users.category.index')->with([
            'detailCategory'=>$detailCategory
        ]);
    }
}
