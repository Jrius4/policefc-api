<?php

namespace App\SoccerModels;

use Illuminate\Database\Eloquent\Model;
use App\SoccerModels\PlayerSocialMediaLink;
use App\SoccerModels\SupportMemberSocialMediaLink;

class SocialMediaName extends Model
{
    protected $fillable = [
        'name',
    ];

    public function playerSocialMediaLink(){
        return $this->hasMany(PlayerSocialMediaLink::class);
    }

    public function supportMemberSocialMediaLink(){
        return $this->hasMany(SupportMemberSocialMediaLink::class);
    }
}
