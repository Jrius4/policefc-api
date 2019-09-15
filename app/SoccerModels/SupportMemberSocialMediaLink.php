<?php

namespace App\SoccerModels;

use App\SoccerModels\SupportMember;
use App\SoccerModels\SocialMediaName;
use Illuminate\Database\Eloquent\Model;

class SupportMemberSocialMediaLink extends Model
{
    protected $fillable = [
        'support_member_id',
        'social_media_name_id',
        'url'
    ];

    public function supportMember(){
        return $this->belongsTo(SupportMember::class);
    }
    public function socialMediaName(){
        return $this->belongsTo(SocialMediaName::class);
    }
}
