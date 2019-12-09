<?php

namespace App\SoccerModels;

use App\MatchReport;
use App\SoccerModels\Team;
use App\SoccerModels\HomeTeam;
use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'date',
        'venue',
        'home_team_score',
        'away_team_score',
        'short_description',
        'home_team_id',
        'away_team_id',
    ];
    public function getRouteKeyName()
    {
        return 'slug';
    }
    protected $dates =['date'];

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
