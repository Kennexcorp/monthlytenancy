<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //
    protected $fillable = [
        'type', 'units', 'toilets', 'bathrooms', 'other_description', 'rooms', 'unit_price', 'landlord_id',
    ];

    public function landlord() {
        return $this->belongsTo(Landlord::class);
    }

    public function propertyImages() {
        return $this->hasMany(PropertyImages::class);
    }
}
