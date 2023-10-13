<?php

namespace App\Services\Client\Http\Controllers\Product;

use Lucid\Units\Controller;
use Illuminate\Http\JsonResponse;
use App\Services\Client\Features\Product\ListProductFeature;
use App\Services\Client\Features\Product\GetListProductFeature;

class ProductController extends Controller
{
    public function index(): JsonResponse
    {
        return $this->serve(ListProductFeature::class);
    }

    public function show($id)
    {
        return $this->serve(GetListProductFeature::class,compact('id'));
    }
}
