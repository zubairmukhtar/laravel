<?php

namespace App\Services\Client\Features\Product;

use App\Data\Models\Product;
use Lucid\Units\Feature;
use Illuminate\Http\Request;
use App\Domains\Product\Jobs\FindProductByIDJob;

class GetListProductFeature extends Feature
{
    protected int $id;


    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function handle(Request $request)
    {
        return $this->run(new FindProductByIDJob($this->id));
    }
}
