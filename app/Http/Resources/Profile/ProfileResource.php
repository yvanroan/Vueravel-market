<?php

namespace App\Http\Resources\Profile;

use App\Http\Resources\CustomResource;

class ProfileResource extends CustomResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'username' => $this->username,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'href' => [
                'link' => route('profiles.show', $this->id)
            ]
        ];
    }

}
