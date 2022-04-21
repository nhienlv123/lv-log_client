<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_map extends Model
{
    protected $fillable = [
        'product_id',
        'type_id',
    ];
}
