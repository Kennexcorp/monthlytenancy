<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //
    protected $fillable = [
        'type', 'units', 'toilets', 'bathrooms', 'other_description', 'rooms',
    ];

    public function landLord() {
        return $this->belongsTo(Landlord::class);
    }

    public function houseImages() {
        return $this->hasMany(PropertyImages::class);
    }
}
