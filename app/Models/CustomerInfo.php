<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerInfo extends Model
{
    use HasFactory;

    protected $table = 'customer_info';

    protected $fillable = [
        'user_id', 'firstname', 'lastname', 'phone',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
