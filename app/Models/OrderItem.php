<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $guarded =['id'];
    protected $table = 'order_items';

    public function order(){
        return $this->belongsTo(Order::class);
    }
    public function menu(){
        return $this->belongsTo(Menu::class, 'menus_id');
    }
}
