<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    protected $fillable = [
        'name',
        'growth_cycle',
        'category',
        'location',
        'price',
        'volume',
        'availability',
        'deleted',
        'description',
        'benefits',
        'emoji',
        'gradient'
    ];

    protected $casts = [
        'benefits' => 'array',
        'deleted' => 'boolean',
    ];
}
