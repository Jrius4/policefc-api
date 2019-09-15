<?php

namespace App\SoccerModels;

use App\SoccerModels\Player;
use Illuminate\Database\Eloquent\Model;

class PlayerPosition extends Model
{
    protected $fillable = [
        'title',
        'abbrev'
    ];

    public function players(){
        return $this->hasMany(Player::class);
    }
}
