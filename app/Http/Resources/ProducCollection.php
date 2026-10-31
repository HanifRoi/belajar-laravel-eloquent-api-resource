<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ProducCollection extends ResourceCollection
{

    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data'=>ProductResource::collection($this->collection)
        ];//kebanyakan programmer pasti pake data
    }
}
