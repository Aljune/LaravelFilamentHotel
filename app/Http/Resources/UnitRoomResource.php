<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UnitRoomResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'unit_room_number' => $this->unit_room_number,
            'unit_room_name' => $this->unit_room_number,
            'slug' => $this->slug,
            'unit_room_type' => $this->unit_room_type,
            'unit_room_price' => $this->unit_room_price,
            'content' => $this->content,
            'unit_room_image' => $this->unit_room_image
        ];
    }
}
