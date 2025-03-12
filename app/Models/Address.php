<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'customer_id', 
        'address', 
        'district', 
        'city', 
        'province', 
        'postal_code', 
    ];

    public function customer(){
        return [
            'id' => $this->id, 
            'address' => $this->address, 
            'district' => $this->district, 
            'city' => $this->city, 
            'province' => $this->province, 
            'postal_code' => $this->postal_code, 
            'created_at' => $this->created_at, 
            'update_at' => $this->updated_at, 
        ];
    }
}
