<?php

namespace App;

use App\WallOfFameCategory;
use Illuminate\Database\Eloquent\Model;

class WallOfFame extends Model
{
    protected $fillable = [
        'image',
        'title',
        'text',
        'wall_of_fame_category_id',
    ];

    public function wallOfFameCategory()
    {
        return $this->belongsTo(WallOfFameCategory::class);
    }
}
