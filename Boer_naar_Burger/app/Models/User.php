<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'insertion',
        'last_name',
        'gender',
        'email',
        'phone_number',
        'street',
        'house_number',
        'zipcode',
        'city',
        'country',
        'iban',
        'company',
        'vat_number',
        'date_of_birth',
        'has_accepted_terms',
        'custom_field_1',
        'custom_field_2',
        'user_type_id',
        'password',
        'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profileImage()
    {
        $imagePath = ($this->avatar) ? $this->avatar : '../../img/noimage.png';
        return '/storage/' . $imagePath;
    }

    public function shop()
    {
        return $this->hasOne(Shop::class);
    }

    public function order()
    {
        $this->hasMany(Order::class);
    }
}
