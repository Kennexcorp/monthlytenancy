<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankInfo extends Model
{
    //
    protected $fillable = [
        'card_number',
        'card_name',
        'expiry_date',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
