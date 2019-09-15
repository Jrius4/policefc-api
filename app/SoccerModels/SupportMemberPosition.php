<?php

namespace App\SoccerModels;

use App\SoccerModels\SupportMember;
use Illuminate\Database\Eloquent\Model;

class SupportMemberPosition extends Model
{
    protected $fillable = [
        'title',
        'abbrev'
    ];

    public function supportMembers(){
        return $this->hasMany(SupportMember::class);
    }
}
