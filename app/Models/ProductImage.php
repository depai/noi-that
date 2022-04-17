<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function saveMany ($product, $images)
    {
        $product->productImages()->delete();
        $data = [];
        foreach ($images as $image) {
            $data[]['name'] = $image;
        }
        $product->productImages()->createMany($data);
        return true;
    }
}
