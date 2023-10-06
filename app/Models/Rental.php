<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    protected $fillable = [
        'bike_id',
        'user_id',
        'rental_start_datetime',
        'rental_end_datetime',
        'rental_closed_datetime',
        'status',
        'description',
    ];
}
