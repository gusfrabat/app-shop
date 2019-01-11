<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    //categoria -> productos
    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function image() {
        return $this->hasMany(productImage::class);
    }

    public function getFeaturedImageUrlAttribute() {
        $featuredImage = $this->image()->where('featured', true)->first();
        if (!$featuredImage)
            $featuredImage = $this->image()->first();

        if ($featuredImage) {
            return $featuredImage->url;
        }
        return '/images/products/default-img.gif';
    }

}
