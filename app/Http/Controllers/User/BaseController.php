<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Collection;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    //
    protected $categoryModel;
    protected $collectionModel;
    public function __construct(Category $category, Collection $collection)
    {
        $this->categoryModel = $category;
        $listCategory = $this->categoryModel->getCategory();
        $this->collectionModel = $collection;
        $listCollection = $this->collectionModel->getCollection();
        View::share ( 'listCategory', $listCategory );
        View::share ( 'listCollection', $listCollection );
    }
}
