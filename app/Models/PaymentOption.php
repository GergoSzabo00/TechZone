<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentOption extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function getNameAttribute()
    {
        return __($this->attributes['name']);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

}
