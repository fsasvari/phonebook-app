<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class PhoneResource extends Resource
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
            'id' => (int) $this->id,
            'contact_id' => (int) $this->contact_id,
            'label' => $this->label,
            'number' => $this->number,
        ];
    }
}
