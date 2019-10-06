<?php

namespace App\SoccerModels;

use App\SoccerModels\Team;
use App\SoccerModels\Match;
use Illuminate\Database\Eloquent\Model;

class MatchTeam extends Model
{

    protected $table = "match_team";

    public function matches(){
        return $this->belongsToMany(Match::class);
    }
    public function teams(){
        return $this->belongsToMany(Team::class);
    }
    
}
