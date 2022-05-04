<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function product ()
    {
        return $this->belongsTo(Product::class);
    }

    public function rock ()
    {
        return $this->belongsTo(Rock::class);
    }

    public function size ()
    {
        return $this->belongsTo(Size::class);
    }
}
