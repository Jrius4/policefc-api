<?php

namespace App\SoccerModels;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = ['logo','name'];

    
    public function getLogoUrlAttribute($value)
    {
        $logoUrl = "";

        if ( ! is_null($this->logo))
        {
            $directory = config('cms.partners.directory');
            $imagePath = public_path() . "/{$directory}/" . $this->logo;
            if (file_exists($imagePath)) $logoUrl = asset("{$directory}/" . $this->logo);
        }

        return $logoUrl;
    }

    public function getLogoThumbUrlAttribute($value)
    {
        $logoUrl = "";

        if ( ! is_null($this->logo))
        {
            $directory = config('cms.partners.directory');
            $ext       = substr(strrchr($this->logo, '.'), 1);
            $thumbnail = str_replace(".{$ext}", "_thumb.{$ext}", $this->logo);
            $imagePath = public_path() . "/{$directory}/" . $thumbnail;
            if (file_exists($imagePath)) $logoUrl = asset("{$directory}/" . $thumbnail);
        }

        return $logoUrl;
    }
}
