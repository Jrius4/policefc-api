<?php

namespace App\SoccerModels;

use App\SoccerModels\PlayerFoot;
use App\SoccerModels\PlayerPosition;
use Illuminate\Database\Eloquent\Model;
use App\SoccerModels\PlayerSocialMediaLink;

class Player extends Model
{
    const LEFT = 'left';
    const RIGHT = 'right';
    const BOTH = 'both';

    const GOAL_KEEPER = 'goal keeper';
    const DEFENDER = 'defender';
    const MID_FIELDER = 'mid fielder';
    const STRIKER = 'striker';


    protected $fillable = [
        'profile_pic',
        'first_name',
        'last_name',
        'position',
        'strong_foot',
        'age',
        'country',
        'previous_club',
        'bio'
    ];

    public function playerSocialMediaLinks(){
        return $this->hasMany(PlayerSocialMediaLink::class);
    }

    public function playerFoot(){
        return $this->belongsTo(PlayerFoot::class);
    }

    public function playerPosition(){
        return $this->belongsTo(PlayerPosition::class);
    }
}
