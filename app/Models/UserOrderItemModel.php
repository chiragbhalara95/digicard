<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOrderItemModel extends Model
{
    use HasFactory;

    protected $table = 'user_order_item';
    protected $primaryKey = 'id';

    protected $fillable = [
        'product_name',
        'qty',
        'price',
        'sub_total',
        'tax_amount1',
        'tax_amount2',
        'total',
    ];

    protected $casts = [];

}
