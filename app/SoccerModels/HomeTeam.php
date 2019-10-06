<?php

namespace App\SoccerModels;

use App\SoccerModels\Team;
use App\SoccerModels\Match;
use App\SoccerModels\SuperTeam;

class HomeTeam extends SuperTeam
{
    protected $table ='home_team';

    public function matches()
    {
        return $this->hasMany(Match::class,'matches','home_team_id');
    }
}