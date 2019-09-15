<?php

namespace App\SoccerModels;

use App\SoccerModels\Player;
use Illuminate\Database\Eloquent\Model;

class PlayerFoot extends Model
{
    protected $fillable = [
        'name',
    ];

    public function players(){
        return $this->hasMany(Player::class);
    }
}
