<?php

namespace App\Http\Resources\Profile;

use App\Http\Resources\CustomResourceCollection;

class ProfileResourceCollection extends CustomResourceCollection
{

    /**
     * Transform the collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
                'data' => $this->collection,
                //'cry' => 'link'//addtional fields
        ];
    }

}