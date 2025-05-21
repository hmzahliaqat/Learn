<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomerDetail extends Model
{
    use HasFactory;

    protected $table = 'customer_details';

    protected $fillable = [
        'user_id',
        'address',
        'postal_code',
        'subscribed_email',
        'subscribed_sms',
        'enabled_push',
        'type',
    ];
}
