<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class RateResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function __construct($resource, $id)
    {
        $this->resource = $resource;
        //$this->id = $id;
    }

    public function toArray($request)
    {

    }
}
