<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyImages extends Model
{
    //
    protected $fillable = [
        'image_path'
    ];

    public function property() {
        return $this->belongsTo(Property::class);
    }
}
