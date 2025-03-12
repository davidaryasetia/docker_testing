<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
          'id' => $this->id, 
          'title' => $this->title, 
          'name' => $this->name, 
          'gender' => $this->gender, 
          'phone_number' => $this->phone_number, 
          'image' => $this->image, 
          'email' => $this->email, 
          'addresses' => AddressResource::collection($this->addresses), 
          'created_at' => $this->created_at, 
          'updated_at' => $this->updated_at, 
        ];
    }
}
