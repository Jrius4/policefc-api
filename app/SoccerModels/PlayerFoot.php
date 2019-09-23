<?php

namespace App\SoccerModels;

use App\SoccerModels\Player;
use Illuminate\Database\Eloquent\Model;

class PlayerFoot extends Model
{
    const LEFT = 'left';
    const RIGHT = 'right';
    const BOTH = 'both';
    protected $table ='player_feet';
    protected $fillable = [
        'name',
    ];

    public function players(){
        return $this->hasMany(Player::class);
    }
}
