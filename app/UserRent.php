<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRent extends Model
{
    //
    protected $fillable = [
        'user_id',
        'property_id',
        'duration',
        'status'
    ];

    public function rents() {
        return $this->hasMany(Rent::class);
    }
}
