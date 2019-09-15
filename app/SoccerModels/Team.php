<?php

namespace App\SoccerModels;

use App\SoccerModels\Match;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'logo',
        'name',
        'slogan',
        'home_stadium'
    ];

    public function matches(){
        return $this->hasMany(Match::class);
    }
}
