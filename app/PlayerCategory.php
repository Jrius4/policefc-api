<?php

namespace App;

use App\SoccerModels\Player;
use Illuminate\Database\Eloquent\Model;

class PlayerCategory extends Model
{
    protected $fillable = [
        'section_name',
    ];

    public function players(){
        return $this->hasMany(Player::class);
    }
}
