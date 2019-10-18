<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visits extends Model
{
    protected $table = 'visits';

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = [
        'ip',
        'iso_code',
        'country',
        'city',
        'state',
        'state_name',
        'postal_code',
        'lat',
        'lon',
        'timezone',
        'continent',
        'currency'
    ];
}
