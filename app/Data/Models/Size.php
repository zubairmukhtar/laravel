<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Size extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->belongsToMany(Product::class, 'products_colors', 'size_id', 'product_id');
    }
}
