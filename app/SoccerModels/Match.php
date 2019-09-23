<?php

namespace App\SoccerModels;

use App\MatchReport;
use App\SoccerModels\Team;
use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable = [
        'date',
        'venue',
        'home_team_score',
        'away_team_score',
    ];

    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }

    public function matchReport()
    {
        return $this->has(MatchReport::class);
    }
}
