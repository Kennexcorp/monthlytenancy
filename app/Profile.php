<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $fillable = [
        'phone_number',
        'date_of_birth',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
