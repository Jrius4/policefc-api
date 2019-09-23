<?php

namespace App\SoccerModels;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    const ADDRESS1 = 'Kampala';
    const ADDRESS2 = 'Naguru';
    const ADDRESS3 = 'Bombo';

    protected $fillable = [
        'name',
        'image',
        'address',
        'description'
    ];
}
