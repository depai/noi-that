<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function category ()
    {
        return $this->belongsTo(Category::class);
    }

    public function collection ()
    {
        return $this->belongsTo(Collection::class);
    }

    public function productImages()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function rocks ()
    {
        return $this->hasMany(Rock::class);
    }

    public function sizes ()
    {
        return $this->hasMany(Size::class);
    }

    public function getProducts($paginate = null)
    {
        $data = $this->with('category', 'collection', 'productImages', 'rocks', 'sizes')->orderBy('id', 'desc');
        if(!empty($paginate)){
            return $data->paginate($paginate);
        }
        return $data->get();
    }

    public function getProductsNew($request)
    {
        $data = $this->with('category', 'collection', 'productImages', 'rocks', 'sizes');
        return $data->orderBy('id', 'desc')->paginate(20);
    }

}
