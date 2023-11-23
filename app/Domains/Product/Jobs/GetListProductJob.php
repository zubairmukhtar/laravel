<?php

namespace App\Domains\Product\Jobs;

use Lucid\Units\Job;
use App\Data\Models\Product;
use Illuminate\Http\JsonResponse;

class GetListProductJob extends Job
{

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(): JsonResponse
    {
        $products = Product::get();

        return response()->json($products);
    }
}
