<?php

namespace App\SoccerModels;

use App\SoccerModels\Player;
use Illuminate\Database\Eloquent\Model;

class PlayerPosition extends Model
{
    const GOAL_KEEPER = 'goal keeper';
    const DEFENDER = 'defender';
    const MID_FIELDER = 'mid fielder';
    const STRIKER = 'striker';

    const GK = 'gk';
    const DER = 'der';
    const MFR = 'mdfr';
    const STKR = 'stkr';

    protected $fillable = [
        'title',
        'abbrev'
    ];

    public function players(){
        return $this->hasMany(Player::class);
    }
}
