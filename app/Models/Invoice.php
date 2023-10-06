<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'rental_id',
        'hours',
        'amount',
        'penalty_hours',
        'penalty_amount',
        'total',
        'payment_status',
    ];
}
