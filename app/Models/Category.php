<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];
    const PARENT = 0;

    public function products ()
    {
        return $this->hasMany(Product::class);
    }

    public function parent ()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children ()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function getTitleAttribute($key)
    {
        return ucfirst($key);
    }

    /**
     * get detail by id
     */
    public function getDetailCategoryById($id)
    {
        return $this->with('parent', 'children', 'products')->where($this->primaryKey, $id)->first();
    }

    /**
     * get category
     * @author lamnt
     * @param int parent = 0 là get tất cả category cha, parent != 0 là get tất cả category con theo id parent
     */
    public function getCategory($parent_id = 0)
    {
        $data = $this->with('children')->where('parent_id', $parent_id);
        return $data->get();
    }

    public function getCategories()
    {
        return $this->with('parent')->where('parent_id', '!=', 0)->orderBy('id','desc')->get();
    }

    /**
     * get by slug
     * @author lamnt
     * @param string slug
     */
    public function getCategoryBySlug($slug)
    {
        return $this->with('children.products.productImages')->where('slug', $slug)->first();
    }

    public function getByCollectionId($collection_id)
    {
        return $this->with('products.productImages')
        ->whereHas('products', function ($q) use($collection_id){
            $q->where('collection_id', $collection_id);
        })->get();
    }
}
