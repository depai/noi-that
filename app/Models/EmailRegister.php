<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailRegister extends Model
{
    use HasFactory;
    protected $table = 'email_registers';
    protected $fillable = ['email', 'date',];
}
