<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InspectionRequest extends Model
{
    //
    protected $fillable = [
        'contact',
        'email',
        'name',
        'message',
        'status',
        'property_id'
    ];

    public function property() {
        return $this->belongsTo(Property::class);
    }
}
