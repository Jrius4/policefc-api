<?php

namespace App;

use App\SoccerModels\Match;
use Illuminate\Database\Eloquent\Model;

class MatchReport extends Model
{
    protected $fillable = [
        'image',
        'title',
        'body',
        'match_id',
    ];

    public function match(){
        return $this->belongsTo(Match::class);
    }

    public function getImageUrlAttribute($value)
    {
        $imageUrl = "";

        if ( ! is_null($this->image))
        {
            $directory = config('cms.image.directory');
            $imagePath = public_path() . "/{$directory}/" . $this->image;
            if (file_exists($imagePath)) $imageUrl = asset("{$directory}/" . $this->image);
        }

        return $imageUrl;
    }

    public function getImageThumbUrlAttribute($value)
    {
        $imageUrl = "";

        if ( ! is_null($this->image))
        {
            $directory = config('cms.image.directory');
            $ext       = substr(strrchr($this->image, '.'), 1);
            $thumbnail = str_replace(".{$ext}", "_thumb.{$ext}", $this->image);
            $imagePath = public_path() . "/{$directory}/" . $thumbnail;
            if (file_exists($imagePath)) $imageUrl = asset("{$directory}/" . $thumbnail);
        }

        return $imageUrl;
    }
    
}
