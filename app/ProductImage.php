<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    //imagen->producto
    public function product() {
        return $this->belongsTo(Product::class);
    }
}
