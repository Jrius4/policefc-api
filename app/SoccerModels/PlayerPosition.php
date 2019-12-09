<?php

namespace App\SoccerModels;

use App\SoccerModels\Player;
use Illuminate\Database\Eloquent\Model;

class PlayerPosition extends Model
{
    const GOAL_KEEPER = 'GOALKEEPER';
    const DEFENDER = 'DEFENDER';
    const MID_FIELDER = 'MIDFIELDER';
    const STRIKER = 'STRIKER';

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
