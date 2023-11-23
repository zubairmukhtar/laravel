<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Color extends Model
{
    use HasFactory;


    public function products()
    {
        return $this->belongsToMany(Product::class, 'products_colors', 'color_id', 'product_id');
    }
}
