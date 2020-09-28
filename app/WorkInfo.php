<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkInfo extends Model
{
    //
    protected $fillable = [
        'occupation',
        'organization_name',
        'organization_address',
        'id_type',
        'id_number',
        'account_statement',
        'callup_letter',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
