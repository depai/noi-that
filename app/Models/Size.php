<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function saveMany($product, $sizes) {
        $data = [];
        $ids = [];
        foreach ($sizes as $size) {
            $size['product_id'] = $product->id;
            if (@$size['id']) {
                $ids[] = $size['id'];
                $product->sizes()->where('id', $size['id'])->update($size);
            } else {
                $data[] = $size;
            }
        }
        $product->sizes()->whereNotIn('id', $ids)->delete();
        $product->sizes()->insert($data);
        return true;
    }

    public function getTitleAttribute ()
    {
        return $this->name;
    }
}
