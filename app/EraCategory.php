<?php

namespace App;

use App\EraCategory;
use Illuminate\Database\Eloquent\Model;

class EraCategory extends Model
{
    protected $fillable = [
        'title',
    ];

    public function eraCategory(){
        return $this->hasMany(EraCategory::class);
    }
}
