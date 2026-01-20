<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PurchaseHistory extends Model
{
    protected $fillable = [
        'date',
        'product',
        'quantity',
        'unit_price',
        'total',
        'status'
    ];
}
