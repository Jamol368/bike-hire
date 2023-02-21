<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Shops extends Model
{
    use HasApiTokens, HasFactory;

    protected $table = 'shops';

    protected $fillable = [
        'name',
        'slug',
        'image',
        'manager',
        'phone',
        'address',
        'latitude',
        'longitude',
        'email',
        'description',
    ];

    public static function hideFields()
    {
        return Model::makeHidden(['created_at', 'updated_at']);
    }

//    protected $hidden = ['created_at', 'updated_at'];

//    public function load(mixed $validated)
//    {
//        $this->name = $validated->name;
//        $this->slug = $validated->slug;
//        $this->image = $validated->image;
//        $this->manager = $validated->manager;
//        $this->phone = $validated->phone;
//        $this->address = $validated->address;
//        $this->latitude = $validated->latitude;
//        $this->longitude = $validated->longitude;
//        $this->email = $validated->email;
//        $this->description = $validated->description;
//
//    }

}
