<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
	    return [
			'data' => $this->collection,
        ];
    }

    public function with($request)
    {
    	return [
    		'extra_information' => 'Another data!',
		    'extra'             => 'Dado adicional'
	    ];
    }
}
