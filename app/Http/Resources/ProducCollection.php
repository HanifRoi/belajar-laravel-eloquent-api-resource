<?php

namespace App\Http\Resources;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Override;

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

    #[Override]
    public function withResponse(Request $request, JsonResponse $response)
    {
        $response->header('X','POWERED BY HANIF GANTENG ROIHAN');
    }
}
