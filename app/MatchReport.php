<?php

namespace App;

use App\SoccerModels\Match;
use Illuminate\Database\Eloquent\Model;

class MatchReport extends Model
{
    protected $fillable = [
        'image',
        'title',
        'body',
        'match_reports_match_id',
    ];

    public function match(){
        return $this->belongsTo(Match::class);
    }
    
}
