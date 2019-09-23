<?php

namespace App\SoccerModels;

use Illuminate\Database\Eloquent\Model;
use App\SoccerModels\SupportMemberPosition;
use App\Transformers\SupportMemberTransformer;

class SupportMember extends Model
{
    const Executive_Member = '1';
    const TECHNICAL_Member = '0';
    public $transformer = SupportMemberTransformer::class;
    protected $fillable = [
        'profile_pic',
        'position_id',
        'firstname',
        'lastname',
        'bio',
        'is_executive'
    ];

    public function isExecutive(){
        return $this->is_executive == SupportMember::Executive_Member;
    }

    public function supportMemberPosition(){
        return $this->belongsTo(SupportMemberPosition::class);
    }
}
