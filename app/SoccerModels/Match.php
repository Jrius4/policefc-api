<?php

namespace App\SoccerModels;

use Illuminate\Database\Eloquent\Model;
use App\SoccerModels\Team;

class Match extends Model
{
    protected $fillable = [
        'home_team_id',
        'away_team_id',
        'date',
        'venue',
        'home_team_score',
        'away_team_score',
    ];

    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }
}
