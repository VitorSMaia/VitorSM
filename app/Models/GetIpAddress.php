<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GetIpAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip',
        'countryName',
        'countryCode',
        'regionCode',
        'regionName',
        'cityName',
        'latitude',
        'longitude',
    ];
}
