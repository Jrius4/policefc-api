<?php

namespace App\SoccerModels;

use App\SoccerModels\SupportMember;
use App\SoccerModels\SocialMediaName;
use Illuminate\Database\Eloquent\Model;

class SupportMemberSocialMediaLink extends Model
{
    protected $fillable = [
        'support_member_id',
        'media_name',
        'url'
    ];

    
    public function supportMember(){
        return $this->belongsTo(SupportMember::class);
    }
}
