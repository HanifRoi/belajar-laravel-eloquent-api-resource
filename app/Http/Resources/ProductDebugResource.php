<?php

namespace App\Http\Resources;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductDebugResource extends JsonResource
{
/**
 * Summary of additional
 * @mixin Product
 */
// public $additional = [
//     'author'=>'Hanif Ganteng Roihan'
// ]; // diganti ke bawah 
    public static $wrap = 'data';
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'author'=>'Hanif Ganteng Roihan',
            'server_time'=>now()->toDateString(),
            'data'=>[
                'id'=>$this->id,
                'name'=>$this->name,
                'price'=>$this->price
            ]
        ];
    }
}
