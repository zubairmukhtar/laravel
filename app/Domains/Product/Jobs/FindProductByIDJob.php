<?php

namespace App\Domains\Product\Jobs;

use Lucid\Units\Job;
use App\Data\Models\Product;
use Illuminate\Http\JsonResponse;

class FindProductByIDJob extends Job
{
    protected int $id;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(): JsonResponse
    {
        $product = Product::findorFail($this->id);

        return response()->json(['product' => $product]);
    }
}
