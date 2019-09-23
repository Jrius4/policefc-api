<?php

namespace App;

use App\WallOfFame;
use Illuminate\Database\Eloquent\Model;

class WallOfFameCategory extends Model
{
    protected $fillable =[
        'title'
    ];

    public function wallOfFames()
    {
        return $this->hasMany(WallOfFame::class);
    }
}
