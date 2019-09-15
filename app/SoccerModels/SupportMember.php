<?php

namespace App\SoccerModels;

use Illuminate\Database\Eloquent\Model;
use App\SoccerModels\SupportMemberPosition;

class SupportMember extends Model
{
    const Executive_Member = 'true';
    const TECHNICAL_Member = 'false';

    protected $fillable = [
        'profile_pic',
        'position',
        'firstname',
        'lastname',
        'bio',
        'is_executive'
    ];

    public function isExecutive(){
        return $this->verified == SupportMember::Executive_Member;
    }

    public function players(){
        return $this->belongsTo(SupportMemberPosition::class);
    }
}
