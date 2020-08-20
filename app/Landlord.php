<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Landlord extends Model
{
    //
    protected $fillable = [
        'name', 'contact', 'type', 'state', 'lga', 'address'
    ];

    public function properties() {
        return $this->hasMany(Property::class);
    }
}
