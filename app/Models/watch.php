<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class watch extends Model
{
    protected $table = 'watch';
    protected $fillable = [
        'ip',
        'os',
        'deviceclass',
        'browser',
        'name',
        'gps_latitude',
        'gps_longitude' 
    ];
}
