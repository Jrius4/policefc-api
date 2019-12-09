<?php

namespace App\SoccerModels;

use App\PlayerCategory;
use App\SoccerModels\PlayerFoot;
use App\SoccerModels\PlayerPosition;
use App\Transformers\PlayerTransformer;
use Illuminate\Database\Eloquent\Model;
use App\SoccerModels\PlayerSocialMediaLink;

class Player extends Model
{
    public $transformer = PlayerTransformer::class;
    protected $fillable = [
        'profile_pic',
        'first_name',
        'last_name',
        'slug',
        'player_position_id',
        'player_foot_id',
        'shirt_no',
        'age',
        'nationality',
        'previous_club',
        'bio',
        'player_category_id'
    ];
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function playerSocialMediaLinks(){
        return $this->hasMany(PlayerSocialMediaLink::class);
    }

    public function playerFoot(){
        return $this->belongsTo(PlayerFoot::class);
    }

    public function playerPosition(){
        return $this->belongsTo(PlayerPosition::class);
    }

    public function playerCategory(){
        return $this->belongsTo(PlayerCategory::class);
    }

    public function getProfilePicUrlAttribute($value)
    {
        $profilePicUrl = "";

        if ( ! is_null($this->profile_pic))
        {
            $directory = config('cms.players-images.directory');
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
            $directory = config('cms.players-images.directory');
            $ext       = substr(strrchr($this->profile_pic, '.'), 1);
            $thumbnail = str_replace(".{$ext}", "_thumb.{$ext}", $this->profile_pic);
            $imagePath = public_path() . "/{$directory}/" . $thumbnail;
            if (file_exists($imagePath)) $profilePicUrl = asset("{$directory}/" . $thumbnail);
        }

        return $profilePicUrl;
    }
}
