<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];
    const NEW = 0, DELIVERING = 1, COMPLETED = 2, REJECT = 3;

    public function orderItems ()
    {
        return $this->hasMany(OrderItem::class);
    }
}
