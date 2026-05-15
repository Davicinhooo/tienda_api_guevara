<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Products extends Model
{
    /** @use HasFactory<\Database\Factories\ProductsFactory> */
    use HasFactory;

    public function category(){
        return $this->belongsTo(Orders::class,"orders_id");
        return $this->belongsTo(Category::class,"categories_id");
        
    }
}
