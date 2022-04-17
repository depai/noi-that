<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rock extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function saveMany ($product, $rocks)
    {
        $data = $ids = [];
        foreach ($rocks as $rock) {
            $rock['product_id'] = $product->id;
            if (@$rock['image']) {
                $imageName = uniqid() . $rock['image']->getClientOriginalExtension();
                $rock['image']->storeAs('public/products/', $imageName);
                $rock['image'] = $imageName;
            }
            if (@$rock['id']) {
                $ids[] = $rock['id'];
                $product->rocks()->where('id', $rock['id'])->update($rock);
            } else {
                $data[] = $rock;
            }
        }

        $product->rocks()->whereNotIn('id', $ids)->delete();
        $product->rocks()->insert($data);
        return true;
    }
}
