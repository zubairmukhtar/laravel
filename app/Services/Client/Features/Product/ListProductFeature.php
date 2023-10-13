<?php

namespace App\Services\Client\Features\Product;

use Lucid\Units\Feature;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Domains\Product\Jobs\GetListProductJob;

class ListProductFeature extends Feature
{
    public function handle(Request $request): JsonResponse
    {
        return $this->run(new GetListProductJob());
    }
}
