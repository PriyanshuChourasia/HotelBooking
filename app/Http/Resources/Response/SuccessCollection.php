<?php

namespace App\Http\Resources\Response;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class SuccessCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }


    public function with(Request $request): array
    {
        $count = count($this) > 1 ? 'Records fetched' : 'Record fetched';
        return [
            'success' => true,
            'code' => 0,
            'status' => count($this) . $count
        ];
    }
}
