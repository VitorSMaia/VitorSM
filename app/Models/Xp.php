<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xp extends Model
{
    use HasFactory;

    protected $fillable = [
        'company',
        'image',
        'office',
        'description',
        'dt_start',
        'dt_end',
        'url'
    ];
}
