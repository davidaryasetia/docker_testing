<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'title', 
        'name', 
        'gender', 
        'phone_number', 
        'image', 
        'email', 
    ];

    public function addressess() {
        return $this->hasMany(Address::class);
    }
}
