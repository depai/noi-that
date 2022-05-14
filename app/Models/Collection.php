<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function products()
    {
        return $this->hasMany(Product::class, 'collection_id');
    }

    /**
     * get all collection
     * @author lamnt
     * @param
     */
    public function getCollection()
    {
        return $this->with('products')->orderBy('id', 'desc')->get();
    }
}
