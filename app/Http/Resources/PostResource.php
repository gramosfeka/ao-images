<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return  [
            'id'          => $this->id,
            'description' => $this->description,
            'image'       => $this->image,
            'user_id'     => $this->user_id,
            'created_at'  => $this->created_at->format('d-m-Y H:i:s'),
            'updated_at'  => $this->updated_at->format('d-m-Y H:i:s'),
        ];
    }
}
