<?php

namespace App;

use App\VideoCategory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'url',
        'title',
        'overview',
        'body',
        'video_category_id',
    ];

    public function achievementCategory(){
        return $this->belongsTo(VideoCategory::class);
    }
}
