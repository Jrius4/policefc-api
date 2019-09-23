<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AchievementCategory extends Model
{
    protected $fillable = [
        'title',
    ];

    public function achievementCategory(){
        return $this-hasMany(Achievement::class);
    }
}
