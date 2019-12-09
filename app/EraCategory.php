<?php

namespace App;

use App\Era;
use Illuminate\Database\Eloquent\Model;

class EraCategory extends Model
{
    protected $fillable = [
        'slug',
        'title',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function eras(){
        return $this->hasMany(Era::class);
    }
}
