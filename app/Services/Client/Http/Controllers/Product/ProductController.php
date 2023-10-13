<?php

namespace App\Services\Client\Http\Controllers\Product;

use Lucid\Units\Controller;
use App\Services\Client\Features\Product\ListProductFeature;

class ProductController extends Controller
{
    public function index()
    {
        return $this->serve(ListProductFeature::class);
    }
}
