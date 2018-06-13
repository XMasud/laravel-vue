<?php

namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\ResourceCollection;

class BooksResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
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
        return [
            'id' => $this->id,
            'name' => $this->title,
            'description' => $this->description,
            'ratings' => $this->ratings,
            'created_at' => $this->created_at,


        ];
    }
}
