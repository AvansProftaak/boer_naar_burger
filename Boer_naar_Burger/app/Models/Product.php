<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $fillable = [
        'name',
        'description',
        'price',
        'is_active',
        'min_order_amount',
        'max_order_amount',
        'stock',
        'display_order',
        'online_from',
        'online_until',
    ];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function orderItem()
    {
        $this->hasMany(OrderItem::class);
    }
}
