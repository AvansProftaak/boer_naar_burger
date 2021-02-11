<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $table = 'shop';

    protected $fillable = [
        'id',
        'name',
        'description',
        'online_from',
        'online_until',
        'shop_banner',
        'shop_logo',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'shop_owner_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class)->orderBy('display_order', 'ASC');
    }
}
