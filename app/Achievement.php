<?php

namespace App;

use App\AchievementCategory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $fillable = [
        'image',
        'title',
        'overview',
        'body',
        'achievement_category_id',
    ];

    public function achievementCategory(){
        return $this->belongsTo(AchievementCategory::class);
    }
}
