<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'color',
        'description',
        'image',
    ];

    public function sizes()
    {
        return $this->hasMany(Size::class, 'product_id', 'id');
    }
    
    public function type_maps()
    {
        return $this->hasMany(Type_map::class, 'product_id', 'id');
    }
}
