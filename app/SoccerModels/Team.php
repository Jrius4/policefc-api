<?php

namespace App\SoccerModels;

use App\SoccerModels\Match;
use App\SoccerModels\MatchTeam;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'logo',
        'name',
        'slogan',
        'home_stadium'
    ];

    public function matches(){
        return $this->hasMany(Match::class);
    }

    public function matchteam(){
        return $this->hasMany(MatchTeam::class);
    }

    public function getLogoUrlAttribute($value)
    {
        $logoUrl = "";

        if ( ! is_null($this->logo))
        {
            $directory = config('cms.teams.directory');
            $imagePath = public_path() . "/{$directory}/" . $this->logo;
            if (file_exists($imagePath)) $logoUrl = asset("{$directory}/" . $this->logo);
        }

        return $logoUrl;
    }

    public function getLogoThumbUrlAttribute($value)
    {
        $logoUrl = "";

        if ( ! is_null($this->logo))
        {
            $directory = config('cms.teams.directory');
            $ext       = substr(strrchr($this->logo, '.'), 1);
            $thumbnail = str_replace(".{$ext}", "_thumb.{$ext}", $this->logo);
            $imagePath = public_path() . "/{$directory}/" . $thumbnail;
            if (file_exists($imagePath)) $logoUrl = asset("{$directory}/" . $thumbnail);
        }

        return $logoUrl;
    }
}
