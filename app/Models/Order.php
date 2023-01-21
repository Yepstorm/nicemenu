<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [
         'id',
    ];

    public function details()
    {
        return $this->hasMany('App\Models\OrderMeta');
    }

    public function user(){
        return $this->belongsToMany(Order::class);
    }
    public function order_items(){
        return $this->hasMany(OrderItem::class);
    }
}
