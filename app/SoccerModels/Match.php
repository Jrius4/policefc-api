<?php

namespace App\SoccerModels;

use App\MatchReport;
use App\SoccerModels\Team;
use App\SoccerModels\HomeTeam;
use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable = [
        'date',
        'venue',
        'home_team_score',
        'away_team_score',
        'home_team_id',
        'away_team_id',
    ];

    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }

    public function homeTeams()
    {
        return $this->belongsToMany(HomeTeam::class);
    }

    public function matchReport()
    {
        return $this->hasOne(MatchReport::class);
    }
}
