<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bike extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'bikes';

    protected $fillable = [
        'bike_category_id',
        'shop_id',
        'name',
        'slug',
        'price',
        'penalty',
        'discount',
        'status',
    ];
}
