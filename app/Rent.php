<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    //
    protected $fillable = [
        'user_rent_id',
        'due_date',
        'status',
        'amount',
        'tref'
    ];

    public function userRent() {
        return $this->belongsTo(UserRent::class);
    }
}
