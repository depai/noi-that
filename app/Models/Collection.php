<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * get all collection
     * @author lamnt
     * @param
     */
    public function getCollection()
    {
        return $this->get();
    }
}
