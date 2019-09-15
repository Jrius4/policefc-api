<?php

namespace App\SoccerModels;

use App\SoccerModels\ProductCategory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const AVAILABLE_PRODUCT = 'available';
    const UNAVAILABLE_PRODUCT = 'unavailable';
    protected $fillable = [
        'name',
        'description',
        'status',
        'image'
    ];

    public function isAvailable()
    {
        return $this->status == Product::AVAILABLE_PRODUCT;
    }

    public function productCategories(){
        return $this->belongsToMany(ProductCategory::class);
    }
}
 