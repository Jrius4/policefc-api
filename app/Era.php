<?php

namespace App;

use App\EraCategory;
use Illuminate\Database\Eloquent\Model;

class Era extends Model
{
    protected $fillable = [
        'image',
        'title',
        'text',
        'era_category_id',
    ];

    public function eraCategory(){
        return $this->belongsTo(EraCategory::class);
    }
}
