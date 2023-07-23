<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOrderModel extends Model
{
    use HasFactory;

    protected $table = 'user_order';
    protected $primaryKey = 'id';

    protected $fillable = [
        'first_name',
        'last_name',
        'user_id',
        'quote_id',
        'email',
        'contactNo',
        'address',
        'city',
        'state',
        'zipCode',
        'total',
    ];

    protected $casts = [];

}
