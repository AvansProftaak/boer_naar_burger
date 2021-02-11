<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'order_balance_incl_vat',
        'order_balance_excl_vat',
        'completed_at',
        'canceled_at',
        'email_send_at',
    ];

    public function orderItem()
    {
        $this->hasMany(OrderItem::class);
    }

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
