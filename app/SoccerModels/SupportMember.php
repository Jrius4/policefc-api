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
        'support_member_position_id',
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

    public function supportMemberLinks(){
        return $this->hasMany(SupportMemberSocialMediaLink::class);
    }

    public function getProfilePicUrlAttribute($value)
    {
        $profilePicUrl = "";

        if ( ! is_null($this->profile_pic))
        {
            $directory = config('cms.support-team-images.directory');
            $imagePath = public_path() . "/{$directory}/" . $this->profile_pic;
            if (file_exists($imagePath)) $profilePicUrl = asset("{$directory}/" . $this->profile_pic);
        }

        return $profilePicUrl;
    }

    public function getProfilePicThumbUrlAttribute($value)
    {
        $profilePicUrl = "";

        if ( ! is_null($this->profile_pic))
        {
            $directory = config('cms.support-team-images.directory');
            $ext       = substr(strrchr($this->profile_pic, '.'), 1);
            $thumbnail = str_replace(".{$ext}", "_thumb.{$ext}", $this->profile_pic);
            $imagePath = public_path() . "/{$directory}/" . $thumbnail;
            if (file_exists($imagePath)) $profilePicUrl = asset("{$directory}/" . $thumbnail);
        }

        return $profilePicUrl;
    }
}
