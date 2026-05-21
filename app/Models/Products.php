<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Products extends Model
{
    /** @use HasFactory<\Database\Factories\ProductsFactory> */
    use HasFactory;

    protected $fillable = [
        "categories_id",
        "orders_id",
        'name',
        'description',
        'price',
        'stock'
    ];

    public function Category(){
        return $this->belongsTo(Category::class,"categories_id");
    }

    public function Orders(){
        return $this->belongsTo(Orders::class,"orders_id");
    }
}
