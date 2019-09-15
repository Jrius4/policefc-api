<?php

namespace App\SoccerModels;

use App\SoccerModels\Player;
use App\SoccerModels\SocialMediaName;
use Illuminate\Database\Eloquent\Model;

class PlayerSocialMediaLink extends Model
{
    protected $fillable = [
        'player_id',
        'social_media_name_id',
        'url'
    ];

    public function player(){
        return $this->belongsTo(Player::class);
    }
    public function socialMediaName(){
        return $this->belongsTo(SocialMediaName::class);
    }
}
