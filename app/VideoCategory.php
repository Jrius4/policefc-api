<?php

namespace App;

use App\SoccerModels\Video;
use Illuminate\Database\Eloquent\Model;

class VideoCategory extends Model
{
    protected $fillable = [
        'title'
    ];

    public function videos()
    {
        return $this->hasMany(Video::class);
    }
}
