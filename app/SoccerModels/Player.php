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
        'player_position_id',
        'strong_foot_id',
        'shirt_no',
        'age',
        'nationality',
        'previous_club',
        'bio',
        'player_category_id'
    ];

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
}
