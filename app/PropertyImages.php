<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyImages extends Model
{
    //
    protected $fillable = [
        'image_path',
        'property_id'
    ];

    public function property() {
        return $this->belongsTo(Property::class);
    }
}
