<?php

namespace App\SoccerModels;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = [
        'image',
        'address',
        'description'
    ];
}
