<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserCreditCard extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_profile_id',
        'phone_code',
        'phone_number',
        'card_number',
        'expiration_date',
        'main',
        'status',
        'detail',
    ];
}
