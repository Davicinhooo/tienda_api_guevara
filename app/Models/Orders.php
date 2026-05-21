<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    /** @use HasFactory<\Database\Factories\OrdersFactory> */
    use HasFactory;

    protected $fillable = [
        "clients_id",
        "order_date",
        "total_amount",
        "status",
        "payment_method",
        "shipping_address",
    ];

    public function Products(){
        return $this->hasMany(Products::class, "orders_id");

    }

    public function Client(){
        return $this->belongsTo(Client::class, "clients_id");
    }
}
