<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_method extends Model
{
    protected $table = 'payment_method';
    protected $fillable = [
        'type',
        'card_number',
        'expiry_date',
        'CVV',
        'user_id',
    ];
}
